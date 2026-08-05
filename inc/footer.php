<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['mail']) && !empty($_POST['mail'])) {
        $email = $_POST['mail'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Check for duplicate entries
            $sql_check = "SELECT * FROM newsletter WHERE mail = ?";
            $stmt_check = $db->prepare($sql_check);
            $stmt_check->bind_param("s", $email);
            $stmt_check->execute();
            $result = $stmt_check->get_result();

            if ($result->num_rows > 0) {
               
            } else {
                // Insert email into the database
                $sql_insert = "INSERT INTO newsletter (mail) VALUES (?)";
                $stmt_insert = $db->prepare($sql_insert);
                $stmt_insert->bind_param("s", $email);
               
            }
            $stmt_check->close();
        }
    } 


}
?>
<div class="container">
    <div class="row justify-content-between">
        <div class="col-xl-3 col-lg-3 col-md-5">
            <div class="h6_footer-widget mb-40 mr-80">
                <div class="footer-logo">
                    <a href="index.php"><img src="assets/img/logo/gniem-school-logo-white.svg" alt=""></a>
                </div>
                <p class="h6_footer-widget-text" align="justify">
                We at Shri Guru Gobind Singh Public School believe that children are individual learners, with teachers serving as mentors and guides in their educational journey.

                </p>
                <div class="h6_footer-social">
                    <ul>
                        <li><a href="https://www.facebook.com/p/Sri-Guru-Gobind-Singh-Public-School-Beghpur-Kamlooh-Mukerian-100076144631340/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <!-- <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-7 d-flex flex-wrap flex-sm-nowrap justify-content-between">
            <div class="h6_footer-inner">
                <div class="h6_footer-widget mb-40">
                    <h5 class="h6_footer-widget-title">Important Links</h5>
                    <div class="h6_footer-widget-list">
                        <ul>
                            <!-- <li><a href="https://rungtapublicschool.ac.in/oasis/oasis_cbse.pdf" target="_blank">Oasis</a></li> -->
                            <!-- <li><a href="playschool.php">Rungta Play School</a></li> -->
                            <li><a href="media.php">Media</a></li>
                            <!-- <li><a href="career.php">Career</a></li> -->
                            <li><a href="#">Achievements</a></li>
                            <!-- <li><a href="https://rungtapublicschool.ac.in/downloads/RPS_Newsletter2020.pdf" target="_blank">News Letters</a></li> -->
                            <!-- <li><a href="https://rungtapublicschool.ac.in/downloads/HANDBOOK__2020-21.pdf" target="_blank">Hand Book For Parents</a></li> -->
                            <li><a href="https://sggsps.in/admission-enquiry.php">Admission Enquiry</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="h6_footer-inner">
                <div class="h6_footer-widget mb-40">
                    <h5 class="h6_footer-widget-title">Downloads</h5>
                    <div class="h6_footer-widget-list">
                        <ul>
                            <li><a href="#" target="_blank">Prospectus</a></li>
                            <!-- <li><a href="shop_product.html">Admission Kit</a></li> -->
                            <li><a href="fee-structure.php">Fee Structure</a></li>
                            <li><a href="#" target="_blank">School Calendar</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-4 col-lg-4 col-md-5">
            <div class="h6_footer-widget ml-80 mb-40">
                <h5 class="h6_footer-widget-title">Newsletter</h5>
                <p class="h6_footer-widget-text newsletter-text"></p>
                <form action="" method="POST">
                    <div class="h6_footer-subscribe-form">
                        <input type="email" name="mail" class="text-light" placeholder="Enter Your Email*" required>
                        <button type="submit">Subscribe</button>
                    </div>
                    <div class="h6_footer-subscribe-condition">
                        <label class="condition_label text-light">
                            I agree to the terms of use and privacy policy.
                            <input type="checkbox" required>
                            <span class="check_mark"></span>
                        </label>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>


<div class="h6_copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="h6_copyright-text">
                    <p>&copy; <?php echo date('Y');?> <a href="/" target="_blank">Shri Guru Gobind Singh Public School</a> | Developed by <a href="http://vibrantick.in/" target="_blank">Vibrantick Infotech Solutions</a></p>
                </div>
            </div>
            <div class="col-6">
                <div class="h6_copyright-text">
                    <p><a href="privacy-policy.php">Privacy Policy</a> | <a href="terms-conditions.php">Terms & Conditions</a></p>
                </div>
            </div>
        </div>
    </div>

   