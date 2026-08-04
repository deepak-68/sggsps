<!Doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home | Shri Guru Gobind Singh Public School</title>
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
        .pointers {
            display: flex;
            /* Aligns items in one line */
            justify-content: space-around;
            /* Evenly spaces the items */
            text-align: center;
            /* Centers text inside each item */
        }

        .pointers span {
            list-style-type: disc;
            /* Adds bullet points (optional) */
            padding: 0 10px;
            /* Adds spacing between items */
            font-size: 16px;
            /* Adjusts font size */
            color: black;
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
    <!--    <div class="sidebar-menu-wrapper fix">-->
    <!--        <div class="mobile-menu"></div>-->
    <!--    </div>-->
    <!--</div>-->
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
        <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/academic.png">
            <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="breadcrumb-title">About Us</h2>
                            <div class="breadcrumb-list">
                                <a href="index.php">Home</a>
                                <span>About</span>
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
                    <?php
                    require_once('about-sidebar.php');
                    ?>
                    <!-- Content Area -->
                    <main class="col-md-9 col-lg-9 list-content">
                        <div class="mb-4">
                            <h5>Our Values</h5>
                            <div class="pointers">
                                <span><i class="fa-solid fa-square" style="color: #903;"></i> Respect for All</span>
                                <span><i class="fa-solid fa-square" style="color: #903;"></i> Perseverance</span>
                                <span><i class="fa-solid fa-square" style="color: #903;"></i> Selfless Service</span>
                            </div>

                        </div>
                        <div class="mb-4 p-4 bg-light rounded">
                            <h5 class="text-center mb-3">Our Community</h5>
                            <div class=" align-items-centr">
                                <!-- Image Section -->
                                <!-- <div class="col-lg-5 col-sm-12 col-xl-5">
                                    <img src="assets/img/campus/look.jpg" alt="Community" class="img-fluid rounded">
                                </div> -->
                                <!-- Text Section -->
                                <div class="col-lg-12 col-sm-12 col-xl-12">
                                    <p align="justify">
                                        Sri Guru Nanak Dev Education Trust was established with the blessings of Baba Puran Singh Ji to promote education in technical and other professional streams in areas where people had remained deprived of such educational facilities. Since its inception, the Trust has been running institutes of various professional streams suiting the needs of the local population. Under the dynamic leadership of Er. Parmjit Singh, Founder Chairman of the Trust and its institutions, has made landmark developments in the field of education quickly. The sincere, dedicated, and continuous efforts of Er. Parmjit Singh & his team have brought revolution in the different fields of education in Hoshiarpur and its adjoining areas. The services of Er. Parmjit Singh has been well-recognized both at the national and international levels. He has received various awards for his individual & institutional achievements along with distinguished services to the nation.
                                    </p>
                                    <!-- <p align="justify">
                                        RASHTRIYA RATTAN AWARD presented by Dr. Bhisham Narain Singh (Former Governor of Tamil Nadu and Assam) and Dr. G.V.G. Krishnamurthy (Former Election Commissioner of India)
                                    </p>
                                    <p align="justify">
                                        INTERNATIONAL GOLD STAR MILLENNIUM AWARD presented at Kathmandu (Nepal) by Dr. Bhisham Narain Singh (Former Governor of Tamil Nadu and Assam) and Mr. Mahesh Aggarwal, President of NEPAL CHAMBER OF INDUSTRIES.</p> -->
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 p-4 bg-light rounded">
                            <h5 class="text-center mb-3">LOCATION & WEATHER</h5>
                            <div class="row align-items-center">
                                <!-- Text Section -->
                                <!-- <div class="col-lg-7 col-sm-12 col-xl-7">
                                    <h6 class="text-dark">Nearest Airport:</h6>
                                    <p class="text-justify">
                                        Swami Vivekanand International Airport, Raipur.<br>
                                        The school is about 40km from the airport.
                                    </p>
                                    <h6 class="text-dark">Nearest Railway Station:</h6>
                                    <p class="text-justify">
                                        Durg Junction.<br>
                                        The school is about 10-12km from the railway station.
                                    </p>
                                </div> -->
                                <!-- Map Section -->
                                <!-- <div class="col-lg-5 col-sm-12 col-xl-5">
                                    <iframe
                                        width="100%"
                                        height="280"
                                        frameborder="0"
                                        style="border:0; border-radius: 8px;"
                                        allowfullscreen=""
                                        scrolling="no"
                                        marginheight="0"
                                        marginwidth="0"
                                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=RUNGTA%20PUBLIC%20SCHOOL%20Rungta%20Knowledge%20City,%20Kohka-Kurud%20Road,%20Bhilai%20(C.G.)-INDIA%20PIN:%20490024+(Rungta%20Public%20School)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                    </iframe>
                                </div> -->
                            </div>
                        </div>


                        <!-- <div class="mb-4">
        <h5>Shri Guru Gobind Singh Public School</h5>
        <div class="row">
        <div class="col-lg-3 col-xl-3">
            <img src="assets/img/community.jpg" alt="">
        </div>
        <div class="col-lg-3 col-xl-3">
        <img src="assets/img/community.jpg" alt="">
        </div> 
        <div class="col-lg-3 col-xl-3">
        <img src="assets/img/community.jpg" alt="">
        </div>
        <div class="col-lg-3 col-xl-3">
        <img src="assets/img/community.jpg" alt="">
        </div>  
        </div>
        </div> -->

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