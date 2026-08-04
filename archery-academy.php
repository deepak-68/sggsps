<!Doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Archery Academy | Shri Guru Gobind Singh Public School</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.ico">

    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
      
        .tabs-container {
            width: 80%;
            max-width: 600px;
            margin-bottom: 20px;
        }

        .tab {
            background: linear-gradient(145deg, #990000, #F7A707);
            color: white;
            padding: 20px;
            margin: 5px 0;
            border-radius: 25px;
            text-align: center;
            cursor: pointer;
            transition: background 0.3s;
        }

        .tab:hover {
            background: linear-gradient(to right,  #F7A707, #990000);
        }

        .content-container {
            width: 100%;
            max-width: 800px;
        }

        .content {
            display: none;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .content.active {
            display: block;
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
        <!-- banner area start -->
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
            <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="breadcrumb-title">Archery Academy</h2>
                            <div class="breadcrumb-list">
                                <a href="index.php">Home</a>
                                <span>Archery Academy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
        <!-- <section class="innerPage_gallery-area pt-110 pb-90">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5 col-lg-6">
                        <div class="section-area-2">
                            <h2 class="section-title mb-50">
                                SGGS <span>Archery Academy <img src="assets/img/banner/2/line.png" alt=""></span>
                            </h2>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="tabs-container">
                            <div class="tab active" data-target="section1">About Archery Academy</div>
                            <div class="tab" data-target="section2">Mentors</div>
                            <div class="tab" data-target="section3">Infrastructure</div>
                            <div class="tab" data-target="section4">Gallery</div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="content-container">
                            <div id="section1" class="content active">
                                <h4>About SGGS Archery Academy</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="assets/img/aboutschool.png" alt="img">
                                    </div>
                                    <div class="col-md-8">
                                        <p>SGGS</p>
                                    </div>
                                </div>
                            </div>
                            <div id="section2" class="content">
                                <h4>Mentors</h4>
                                <p>Details about Mentors go here.</p>
                            </div>
                            <div id="section3" class="content">
                                <h4>Infrastructure</h4>
                                <p>Details about Infrastructure go here.</p>
                            </div>
                            <div id="section4" class="content">
                                <h4>Gallery</h4>
                                <p>Details about Gallery go here.</p>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </section> -->

        <!-- cta area start -->
        <div class="h6_cta-area pt-120">
            <div class="container">
                <?php
                require('inc/cta.php');
                ?>
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
        <div class="admission_apply">
            <span>
                <a href="">
                    <img src="assets/img/applynow.webp" alt="">
                </a>
            </span>
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
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs and contents
                document.querySelectorAll('.tab, .content').forEach(item => {
                    item.classList.remove('active');
                });

                // Add active class to the clicked tab and corresponding content
                tab.classList.add('active');
                document.getElementById(tab.getAttribute('data-target')).classList.add('active');
            });
        });
    </script>
</body>

</html>