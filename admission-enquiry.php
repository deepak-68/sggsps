<?php
require("admin/db/config.php");
session_start();
error_reporting(E_ALL);

$response = ['success' => false, 'message' => ''];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $child_name = filter_input(INPUT_POST, 'child_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $father_name = filter_input(INPUT_POST, 'father_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $mother_name = filter_input(INPUT_POST, 'mother_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $phone = filter_input(INPUT_POST, 'contact_number', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $curriculum = filter_input(INPUT_POST, 'curriculum', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $class = filter_input(INPUT_POST, 'class_applied', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Validate inputs
    if (empty($child_name) || empty($father_name) || empty($mother_name) || empty($phone) || empty($curriculum) || empty($class)) {
        $response['message'] = "All fields are required.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $child_name) || !preg_match("/^[a-zA-Z\s]+$/", $father_name) || !preg_match("/^[a-zA-Z\s]+$/", $mother_name)) {
        $response['message'] = "Names should contain only letters and spaces.";
    } elseif (!preg_match("/^\d{10}$/", $phone)) {
        $response['message'] = "Enter a valid 10-digit phone number.";
    } else {
        // Insert into database
        $stmt = $db->prepare("INSERT INTO admission_enquiry (child_name, father_name, mother_name, contact, curriculum, class) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $child_name, $father_name, $mother_name, $phone, $curriculum, $class);

        if ($stmt->execute()) {
            $response['success'] = true;
            $response['message'] = "Admission enquiry submitted successfully!";
        } else {
            $response['message'] = "Database error. Please try again.";
        }
    }

    // Return JSON response
    echo json_encode($response);
    exit();
}

$registrationSuccessMessage = isset($_SESSION['registrationSuccessMessage']) ? $_SESSION['registrationSuccessMessage'] : '';
unset($_SESSION['registrationSuccessMessage']);

// Fetch reCAPTCHA site key
$query3 = "SELECT site_key FROM google_captcha";
$result3 = mysqli_query($db, $query3);
$site_Key = ($result3) ? mysqli_fetch_assoc($result3)['site_key'] : '';
?>



<!Doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admission Enquiry | Rungta Public School</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.ico">

    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <!-- Include CSS for intlTelInput -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
    <style>
      
        .form-container {
            max-width: 700px;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            padding-left: 2.5rem;
        }
        .input-group-text {
            background: #990000;
            color: white;
            border: none;
        }
        .form-label {
            font-weight: 600;
        }
        .btn-pri {
            width: 100%;
            border-radius: 25px;
            background: #990000;
            border: 1px solid #990000;
            color:#fff;
        }
        .btn-pri:hover {
      
            background: #990000;
            border: 1px solid #990000;
            color:#fff;
        }
        a{
            text-decoration: none;
        }
        .iti--allow-dropdown input, .iti--allow-dropdown input[type=tel], .iti--allow-dropdown input[type=text], .iti--separate-dial-code input, .iti--separate-dial-code input[type=tel], .iti--separate-dial-code input[type=text] {
    padding-right: 6px;
    padding-left: 52px;
    margin-left: 0;
    width: 280px;
}
    </style>
</head>

<body>
    <!-- sidebar-information-area-start -->
    <div class="sidebar-info side-info">
        <?php
        require_once('sidebar.php');
        ?>
    </div>

    <div class="offcanvas-overlay"></div>
    <!-- sidebar-information-area-end -->

    <!-- header area start -->
    <header>
        <?php
        require('inc/menu.php');
        ?>
    </header>
    <!-- header area end -->

    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/contactus.png">
            <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="breadcrumb-title">Admission Enquiry</h2>
                            <div class="breadcrumb-list">
                                <a href="index.php">Home</a>
                                <span>Admission Enquiry</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
        <!-- contact area start -->
        <section class="contact-area pt-120 pb-120">
       
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="form-container">
        <h3 class="text-center mb-4"> Admission Enquiry Form</h3>
        <div class="alert alert-danger text-center" style="display: none;"></div>
        <div class="alert alert-success text-center" style="display: none;"></div>


        <form id="admissionForm" method="POST" action="">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="childName" class="form-label">Child's Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" id="childName" name="child_name" placeholder="Enter child's name" required autocomplete="off" pattern="^[a-zA-Z\s]+$" title="Only letters and spaces are allowed.">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="motherName" class="form-label">Mother's Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" id="motherName" name="mother_name" placeholder="Enter mother's name" required autocomplete="off" pattern="^[a-zA-Z\s]+$" title="Only letters and spaces are allowed.">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="fatherName" class="form-label">Father's Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" id="fatherName" name="father_name" placeholder="Enter father's name" required autocomplete="off" pattern="^[a-zA-Z\s]+$" title="Only letters and spaces are allowed.">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <div class="input-group">
                            <input id="phone" class="form-control" type="tel" name="contact_number" placeholder="Phone" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="curriculum" class="form-label">Curriculum</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-book"></i></span>
                        <select class="form-select" id="curriculum" name="curriculum" required>
                            <option value="" selected disabled>Select Curriculum</option>
                            <option value="CBSE">CBSE</option>
                            <option value="Cambridge">Cambridge</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="classApplied" class="form-label">Class Applied For</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-building"></i></span>
                        <select class="form-select" id="classApplied" name="class_applied" required>
                            <option value="" selected disabled>Select Class</option>
                            <option value="Playground">Playground</option>
                            <option value="Nursery">Nursery</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                            <option value="V">V</option>
                            <option value="VI">VI</option>
                            <option value="VII">VII</option>
                            <option value="VIII">VIII</option>
                            <option value="IX">IX</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="<?php echo $site_Key; ?>" data-callback="enableSubmit"></div>
                </div>
                <div class="text-center">
                    <button class="btn btn-pri" type="submit" value="Submit" id="submitBtn" disabled>Submit</button>
                </div>
            </form>
            
        </div>
    </div>

        </section>
     
        <!-- contact area end -->

        <!-- cta area start -->
        <div class="h6_cta-area ">
            <div class="container">
                <?php require_once('inc/cta.php'); ?>
            </div>
        </div>
        <!-- cta area end -->

    </main>
    <a id="scrollUpBtn" title="Go to top"><i class="fas fa-arrow-up"></i></a>
    <!-- footer area start -->
    <footer class="h6_footer-area">
        <div class="footer-top pt-200 pb-30">
            <?php
            require('inc/footer.php');
            ?>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- JS here -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/jquery.bxslider.min.js"></script>
    <script src="assets/js/main.js"></script>
     <!-- Include JS Libraries -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script>
        function enableSubmit() {
            var response = grecaptcha.getResponse();
            if (response.length > 0) {
                document.getElementById("submitBtn").removeAttribute("disabled");
            }
        }
    </script>
     <script>
        document.addEventListener("DOMContentLoaded", function() {
            var input = document.querySelector("#phone");
            window.intlTelInput(input, {
                initialCountry: "in", // Set the default country (e.g., "in" for India)

                preferredCountries: ["us", "gb", "in", "au"], // Prioritize these countries
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
            });
        });
    </script>
 <script>
        $(document).ready(function() {
            $('#admissionForm').on('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Collect form data
    var formData = $(this).serialize();

    // Send AJAX request
    $.ajax({
        url: $(this).attr('action'),
        method: 'POST',
        data: formData,
        dataType: 'json',
        success: function(data) {
            if (data.success) {
                // Display success message
                $('.alert-success').text(data.message).show();
                $('.alert-danger').hide();
                $('#admissionForm')[0].reset(); // Clear the form

                // Hide success message after 5 seconds
                setTimeout(function() {
                    $('.alert-success').fadeOut('slow');
                }, 5000);
            } else {
                // Display error message
                $('.alert-danger').text(data.message).show();
                $('.alert-success').hide();

                // Hide error message after 5 seconds
                setTimeout(function() {
                    $('.alert-danger').fadeOut('slow');
                }, 5000);
            }
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
});


            // Enable submit button after reCAPTCHA is completed
            window.enableSubmit = function() {
                $('#submitBtn').prop('disabled', false);
            };

            // Initialize intlTelInput
            var input = document.querySelector("#phone");
            window.intlTelInput(input, {
                initialCountry: "in",
                preferredCountries: ["us", "gb", "in", "au"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
            });
        });
    </script>


</body>

</html>