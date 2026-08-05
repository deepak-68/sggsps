<?php
session_start();
error_reporting(E_ALL);

// Redirect to login if not logged in
if (!isset($_SESSION["login_user"])) {
    header("location: index.php");
    exit();
}

include("db/config.php");

$msg = "";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $question = mysqli_real_escape_string($db, $_POST['faq_question']);
    $answer = mysqli_real_escape_string($db, $_POST['faq_answer']);
    $status = $_POST['status'];

    // Insert query
    $query = "INSERT INTO faq (faq_question, faq_answer, status) VALUES ('$question', '$answer', '$status')";
    if (mysqli_query($db, $query)) {
        // Success message
        $msg = "
        <div class='alert alert-success alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
            <strong><i class='feather icon-check'></i> Thanks!</strong> FAQ added successfully.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        ";

        // Redirect to prevent resubmission
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        // Error message
        $msg = "
        <div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
            <strong><i class='feather icon-alert-circle'></i> Error!</strong> Unable to add FAQ. Please try again.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add FAQ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">
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
    <!-- Loader -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <!-- Header -->
    <?php include("header.php"); ?>

    <!-- Navbar -->
    <?php include("navbar.php"); ?>

    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h5 class="m-b-10">Add FAQ</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                        <?php
                            if ($msg) {
                                echo $msg;
                            }
                            ?>
                            <form method="post" action="" id="submitForm" autocomplete="off">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="faq_question">Question <span class="red-text">*</span></label>
                                            <input type="text" name="faq_question" id="faq_question" placeholder="Enter the FAQ Question" class="form-control" required>
                                        </div>
                                    </div>
                                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12">
                                            <div class="form-group">Status <span class="red-text">*</span>
                                                <label class="sr-only control-label" for="name">Status<span class=" ">
                                                    </span></label>
                                                <select id="" name="status" class="form-control"
                                                    oninvalid="this.setCustomValidity('Please Select Status')"
                                                    oninput="setCustomValidity('')" required>
                                                    <option value="">Choose</option>
                                                    <option value="1">Enable</option>
                                                    <option value="0">Disable</option>

                                                </select>
                                            </div>
                                        </div>
                                    <!-- <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="faq_answer">Answer <span class="red-text">*</span></label>
                                            <textarea name="faq_answer" id="faq_answer" rows="5" class="form-control" placeholder="Enter the FAQ Answer" required></textarea>
                                        </div>
                                    </div> -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div id="summernote" name="faq_answer"></div>
                                            
                                        </div>
                                        <input type="hidden" id="faq_answer" name="faq_answer">
                                        
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <button type="submit" class="btn btn-secondary">
                                            <i class="feather icon-save"></i> Add FAQ
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

    <script>
    $(document).ready(function() {
            // Initialize Summernote Editor
            $('#summernote').summernote({
                height: 300 // Set editor height
            });
        $('#submitForm').on('submit', function(e) {
            let faqanswer = $('#summernote').summernote('code');
            $('#faq_answer').val(faqanswer);
            this.submit();
        })
    });
</script>
    <script>
        $(document).ready(function() {
            $("#goldmessage").delay(5000).slideUp(300);
        });
    </script>
</body>
</html>
