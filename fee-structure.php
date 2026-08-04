<!Doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fee Structure & Bursaries | Shri Guru Gobind Singh Public School</title>
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
    <style>
        .pdf-container {
            position: relative;
            width: 100%;
            padding-top: 75%;
            /* Default Aspect Ratio for larger screens */
        }

        .pdf-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Mobile screens - make PDF scrollable */
        @media (max-width: 768px) {
            .pdf-container {
                padding-top: 0;
                /* Remove aspect ratio padding */
                height: 500px;
                /* Set a fixed height */
                overflow-y: auto;
                /* Enable vertical scrolling */
            }

            .pdf-container iframe {
                height: 100%;
                /* Set iframe to fill container height */
            }
        }

        /* Extra small screens - smaller height for scroll */
        @media (max-width: 480px) {
            .pdf-container {
                height: 300px;
                /* Smaller height for extra small screens */
            }
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
        <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/admission.png">
            <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="breadcrumb-title">Fee Structure & Bursaries</h2>
                            <div class="breadcrumb-list">
                                <a href="index.php">Home</a>
                                <span>Fee Structure & Bursaries</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
        <section class="about-area pt-80 pb-90">
            <div class="container">
                <div class="row">
                    <!-- Sidebar -->
                    <?php
                    require_once('admission-sidebar.php');
                    ?>

                    <!-- Content Area -->
                    <main class="col-md-9 col-lg-9 list-content">
                        <h5 class="text-center">Fee Structure & Bursaries</h5>
                        <div class="container my-5 ">
                            <button class="theme-btn theme-btn-6" data-bs-toggle="modal" data-bs-target="#pdfModal1">Indian Students for CBSE</button>
                            <button class="theme-btn theme-btn-6" data-bs-toggle="modal" data-bs-target="#pdfModal2">Indian Students for Cambridge</button>
                            <button class="theme-btn theme-btn-6" data-bs-toggle="modal" data-bs-target="#pdfModal3">Pre-Primary Wing</button>
                            <br><br>
                            <h4>TBA</h4>
                            <!-- Modal Structure 1-->
                            <!-- <div class="modal fade" id="pdfModal1" tabindex="-1" aria-labelledby="pdfModalLabel1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="pdfModalLabel">Indian Students for CBSE</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="pdf-container">
                                                <iframe src="https://rungtapublicschool.ac.in/downloads/I_to_XII,_2024-25_Fee_Structure.pdf" frameborder="0" scrolling="no"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Modal Structure 2-->
                            <!-- <div class="modal fade" id="pdfModal2" tabindex="-1" aria-labelledby="pdfModalLabel2" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="pdfModalLabel">Indian Students for Cambridge</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="pdf-container">
                                                <iframe src="https://rungtapublicschool.ac.in/downloads/Cambridge_%202024-25_Fee_Structure.pdf" frameborder="0" scrolling="no"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Modal Structure 3-->
                            <!-- <div class="modal fade" id="pdfModal3" tabindex="-1" aria-labelledby="pdfModalLabel3" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="pdfModalLabel">Pre-Primary Wing</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="pdf-container">
                                                <iframe src="https://rungtapublicschool.ac.in/downloads/Pre-primary_24-25_fee_structure.pdf" frameborder="0" scrolling="no"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->


                        </div>

                    </main>
                </div>
            </div>
        </section>

        <!-- cta area start -->
        <div class="h6_cta-area ">
            <div class="container">
                <?php include('inc/cta.php'); ?>
            </div>
        </div>
        <!-- cta area end -->
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
</body>

</html>