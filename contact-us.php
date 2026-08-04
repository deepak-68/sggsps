<?php
require("admin/db/config.php");
session_start();
error_reporting(E_ALL);

$registrationSuccessMessage = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $recaptcha_response = $_POST['g-recaptcha-response'];

    // Validate input fields (excluding reCAPTCHA)
    if (!$first_name || !$last_name || !$email || !$phone || !$message) {
        $errorMessage = "Please fill in all fields correctly.";
    } elseif (!preg_match("/^[6-9]\d{9}$/", $phone)) {
        $errorMessage = "Invalid phone number. It must be 10 digits, starting with 6, 7, 8, or 9.";
    } else {
        // **Skip reCAPTCHA validation** and directly insert data
        $insertQuery = "INSERT INTO contact_us (first_name, last_name, email, phone, message) VALUES (?, ?, ?, ?, ?)";
        if ($stmt = $db->prepare($insertQuery)) {
            $stmt->bind_param("sssss", $first_name, $last_name, $email, $phone, $message);
            if ($stmt->execute()) {
                $_SESSION['registrationSuccessMessage'] = "Your message has been sent successfully!";
                header("Location: contact-us.php");  // Redirect to prevent form resubmission
                exit();
            } else {
                $errorMessage = "Error submitting your message. Please try again.";
            }
            $stmt->close();
        } else {
            $errorMessage = "Database error: " . $db->error;
        }
    }
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
    <title>Contact Us | Shri Guru Gobind Singh Public School</title>
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
                            <h2 class="breadcrumb-title">Contact Us</h2>
                            <div class="breadcrumb-list">
                                <a href="index.php">Home</a>
                                <span>Contact Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- contact area start -->
        <section class="contact-area pt-120 pb-120">
            <div class="container">
                <div class="contact-wrap">
                    <div class="row">
                        <div class="col-xl-8 col-md-8">
                            <div class="contact-content pr-80 mb-20">
                                <h3 class="contact-title mb-25">Send Me Message</h3>
                                <?php if ($registrationSuccessMessage): ?>
                                    <div class="alert alert-success"><?php echo $registrationSuccessMessage; ?></div>
                                <?php endif; ?>
                                <?php if ($errorMessage): ?>
                                    <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
                                <?php endif; ?>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="contact-form" onsubmit="return validateForm()">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                            <div class="contact-form-input mb-30">
                                                <input type="text" name="first_name" placeholder="First Name" required>
                                                <span class="inner-icon"><i class="fa-thin fa-user"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                            <div class="contact-form-input mb-30">
                                                <input type="text" name="last_name" placeholder="Last Name" required>
                                                <span class="inner-icon"><i class="fa-thin fa-user"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                            <div class="contact-form-input mb-30">
                                                <input type="email" name="email" placeholder="Email Address" required>
                                                <span class="inner-icon"><i class="fa-thin fa-envelope"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                            <div class="contact-form-input mb-30">
                                                <input type="text" name="phone" placeholder="Your Number" pattern="[6-9]\d{9}" title="Please enter a valid 10-digit phone number starting with 6, 7, 8, or 9" required>
                                                <span class="inner-icon"><i class="fa-thin fa-phone-volume"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="contact-form-input contact-form-textarea">
                                                <textarea name="message" cols="30" rows="10" placeholder="Feel free to get in touch!" required></textarea>
                                                <span class="inner-icon"><i class="fa-thin fa-pen"></i></span>
                                            </div>
                                        </div>

                                        <!-- Google reCAPTCHA -->
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="<?php echo $site_Key; ?>" data-callback="enableSubmit" style="border:none;"></div>
                                        </div>

                                        <div class="col-12">
                                            <div class="contact-form-submit mb-30">
                                                <div class="contact-form-btn">
                                                    <button class="theme-btn theme-btn-7" type="submit" value="Submit" id="submitBtn" disabled>Send Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4">
                            <div class="contact-info ml-50 mb-20">
                                <h3 class="contact-title mb-40">Get In Touch</h3>
                                <div class="contact-info-item">
                                    <span><i class="fa-thin fa-location-dot"></i>Address</span>
                                    <p>Naushera</p>
                                </div>
                                <div class="contact-info-item">
                                    <span><i class="fa-thin fa-mobile-notch"></i>Phone</span>
                                    <a href="tel:+91999999999">+91 99997-87878</a>
                                </div>
                                <div class="contact-info-item">
                                    <span><i class="fa-thin fa-envelope"></i>Email</span>
                                    <a href="mailto:example@gmail.com">
                                        info@sggs.ac.in</a>
                                </div>
                                <div class="contact-social">
                                    <span>Social Media</span>
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="contact-map">
                <iframe src="#" oading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div> -->
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
    <script>
        function enableSubmit() {
            var response = grecaptcha.getResponse();
            if (response.length > 0) {
                document.getElementById("submitBtn").removeAttribute("disabled");
            }
        }
    </script>
    <!-- JavaScript for Client-side Validation -->
    <script>
        function enableSubmit() {
            document.getElementById("submitBtn").removeAttribute("disabled");
        }

        function validateForm() {
            var firstName = document.getElementsByName("first_name")[0].value.trim();
            var lastName = document.getElementsByName("last_name")[0].value.trim();
            var email = document.getElementsByName("email")[0].value.trim();
            var phone = document.getElementsByName("phone")[0].value.trim();
            var message = document.getElementsByName("message")[0].value.trim();
            var recaptcha = grecaptcha.getResponse();

            if (!firstName || !lastName || !email || !phone || !message) {
                alert("Please fill in all fields.");
                return false;
            }

            if (!/^[6-9]\d{9}$/.test(phone)) {
                alert("Invalid phone number. It must be 10 digits, starting with 6, 7, 8, or 9.");
                return false;
            }

            if (!recaptcha) {
                alert("Please complete the reCAPTCHA.");
                return false;
            }

            return true;
        }
    </script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>