<?php
session_start();

error_reporting(E_ALL);

if (!isset($_SESSION["login_user"])) {
    header("location: index.php");
    exit;
}

$name = $_SESSION['login_user'];
include("db/config.php");

// Initialize variables
$existingQuestion = "";
$existingAnswer = "";
$existingStatus = "";

// Fetch existing FAQ details for update
if (isset($_GET['id'])) {
    $encodedTestId = $_GET['id'];
    $faqId = base64_decode($encodedTestId);

    $query = "SELECT * FROM faq WHERE faq_id = $faqId";
    $result = mysqli_query($db, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Fetch existing FAQ details
        $existingQuestion = $row['faq_question'];
        $existingAnswer = $row['faq_answer'];
        $existingStatus = $row['status'];
    } else {
        echo "FAQ not found!";
        exit;
    }
}

// Add or update FAQ
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question = mysqli_real_escape_string($db, $_POST['faq_question']);
    $answer = mysqli_real_escape_string($db, $_POST['faq_answer']);
    $status = $_POST['status'];

    if (isset($_GET['id'])) {
        // Update existing FAQ
        $updateQuery = "UPDATE faq SET faq_question = '$question', faq_answer = '$answer', status = '$status' WHERE faq_id = $faqId";
    } else {
        // Insert new FAQ
        $updateQuery = "INSERT INTO faq (faq_question, faq_answer, status) VALUES ('$question', '$answer', '$status')";
    }

    if (mysqli_query($db, $updateQuery)) {
        $statusEncoded = base64_encode(1);
        echo ("<script>window.location.href='manage-faq.php?status=$statusEncoded';</script>");
        exit;
    } else {
        $msg = "<div class='alert alert-danger'>Error updating FAQ: " . mysqli_error($db) . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo isset($_GET['id']) ? 'Update' : 'Add'; ?> FAQ's</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- summer note links -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <style>
        .red-text {
            color: red;
        }
    </style>
</head>

<body>
    <!-- Include header and navbar -->
    <?php include("header.php"); ?>
    <?php include("navbar.php"); ?>

    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5><?php echo isset($_GET['id']) ? 'Update' : 'Add'; ?> FAQ's</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <?php if (isset($msg)) echo $msg; ?>
                        </div>
                        <div class="card-body">
                            <form method="post" action="" autocomplete="off">
                                <div class="form-group">
                                    <label for="faq_question">Question <span class="red-text">*</span></label>
                                    <input type="text" name="faq_question" id="faq_question" placeholder="Enter the FAQ Question" class="form-control" value="<?php echo htmlspecialchars($existingQuestion); ?>" required>
                                </div>

                                <div id="summernote"></div>
                                <!-- Hidden Input to Hold Summernote Content -->
                                <input type="hidden" name="faq_answer" id="faq_answer" value="<?php echo isset($row['faq_answer']) ? htmlspecialchars($row['faq_answer']) : ''; ?>">
                                <!-- Hidden ID field for updating -->
                                <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>"></select>
                                <div class="form-group">
                                    <label for="status">Status <span class="red-text">*</span></label>
                                    <select id="status" name="status" class="form-control" required>
                                        <option value="" disabled <?php echo empty($existingStatus) ? 'selected' : ''; ?>>Choose</option>
                                        <option value="1" <?php echo ($existingStatus == '1') ? 'selected' : ''; ?>>Enable</option>
                                        <option value="0" <?php echo ($existingStatus == '0') ? 'selected' : ''; ?>>Disable</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-secondary">
                                    <i class="feather icon-save"></i> <?php echo isset($_GET['id']) ? 'Update' : 'Add'; ?> FAQ
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize Summernote Editor
            $('#summernote').summernote({
                height: 300 // Set editor height
            });
            // Load existing content into Summernote
            let content = $("#faq_answer").val(); // Get content from the hidden input
            $('#summernote').summernote('code', content); // Set it in the editor
            // Sync Summernote content with the hidden input on form submission
            $('form').on('submit', function(e) {
                let summernoteContent = $('#summernote').summernote('code'); // Get content from Summernote
                $('#faq_answer').val(summernoteContent); // Update the hidden input
            });
        });
    </script>
</body>

</html>