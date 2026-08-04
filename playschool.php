<!Doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from themephi.net/template/eduan/eduan/index-10.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 05:10:10 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rungta Play School | Rungta Public School</title>
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
        <style>


.icon-style {
    font-size: 50px;
    color: #990000;
    margin-bottom: 15px;
}


.icon-container {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
            gap : 50px; 
        }
        .icon-box {
     
            text-align: center;
            cursor: pointer;
            font-size: 2rem;
            transition: transform 0.3s ease;
            padding: 20px;
    border-radius : 20px;
    border: 2px dashed #990000;

        }
        .icon-box:hover {
            transform: scale(0.9);
        }
        .info-box {
            text-align: justify;
            display: none;
            margin-top: 20px;
            font-size: 1.1rem;
          background-color: #990000;
          padding: 20px;
          border-radius: 20px;
          
        }
        .info-box p{
            color: #fff;
        }
        .info-box ol li{
            color: #fff;
        }
        .info-box.active {
            display: block;
        }
        /* Styling for smaller screens */
        @media (max-width: 768px) {
            .icon-box {
                flex: 1 1 45%; /* Adjust icon size on tablets */
                margin: 10px;
            }
        }

        @media (max-width: 576px) {
            .icon-box {
                flex: 1 1 100%; /* Stack icons vertically on mobile */
                font-size: 1.5rem;
            }

            .icon-style {
                font-size: 2rem;
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
            <!-- banner area start -->
            <!-- breadcrumb area start -->
        <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
            <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="breadcrumb-title">Rungta Play School</h2>
                            <div class="breadcrumb-list">
                                <a href="index.php">Home</a>
                                <span>Rungta Play School</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
            <!-- banner area end -->

            <!-- about area start -->
            <section class="h10_about-area pt-120 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="h10_about-img mr-25">
                                <img src="assets/img/about/10/img-shape.png" alt="" class="h10_about-img-shape d-none d-md-block">
                                <img src="assets/img/about/10/shape-1.png" alt="" class="h10_about-img-shape-1 d-none d-md-block">
                                <img src="assets/img/about/10/1.png" alt="" class="wow fadeInLeftBig" data-wow-delay="0.3s">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="h10_about-content ml-35">
                                <img src="assets/img/about/10/shape-2.png" alt="" class="h10_about-shape-2">
                                <h2 class="h10_about-content-title">About Rungta Play School</h2>
                                <div class="h10_about-content-inner">
                                    <h5>Play As You Learn</h5>
                                    <p align="justify" class="text-dark">Rungta Play School, Durg a unit of Rungta Public School, Bhilai under the aegis of Sanjay Rungta Group of Institutions, is a progressive low-cost School. It follows Montessori teaching practice and active-play method for your little angels. The teaching learning process is based on projects method and constructivism.</p>
                                    <p align="justify" class="text-dark">The school has been adjudged No.1 “Value for money progressive Play School” in the state of Chhattisgarh by the C-fore (Delhi).</p>
                                </div>
                                <div class="h10_about-count">
                                    <div class="h10_about-count-item">
                                        <h3>06+</h3>
                                        <span>Years experience</span>
                                    </div>
                                    <div class="h10_about-count-item">
                                        <h3>7k+</h3>
                                        <span>Students each year</span>
                                    </div>
                                    <div class="h10_about-count-item">
                                        <h3>24+</h3>
                                        <span>Award Wining</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about area end -->

 

            <div class="container text-center py-5">
        <!-- Icon Section -->
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="icon-box" onmouseover="showInfo(0)">
                    <i class="fa-solid fa-child logo-icon icon-style"></i>
                    <h5>EARLY CHILDHOOD CARE</h5>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="icon-box" onmouseover="showInfo(1)">
                    <i class="fa-solid fa-graduation-cap icon-style"></i>
                    <h5>PERSONALIZED LEARNING</h5>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="icon-box" onmouseover="showInfo(2)">
                    <i class="fa-solid fa-person-running fa-icon icon-style"></i>
                    <h5>ACTIVITIES & SKILL DEVELOPMENT</h5>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="icon-box" onmouseover="showInfo(3)">
                    <i class="fa-solid fa-list-check icon-style"></i>
                    <h5>PRACTICES WE FOLLOW</h5>
                </div>
            </div>
        </div>

        <!-- Information Sections -->
        <div class="info-box active" id="info-0">
            <p>At Rungta Play School we assure you that your child will have a perfect blend of trained teachers, conductive environment with lots of learning resources and homely love and care.</p>
            <p>Our learning centres are spacious, colourful and filled with lots of books, toys and learning aids which children of this age group will enjoy and have fun with. We believe in edutainment which is a hybrid of education and entertainment, it works exceptionally well for kids of this age given their insatiable curiosity about the world.</p>
        </div>
        <div class="info-box" id="info-1">
            <p>Rungta Play School has award winning preparatory schooling system; it has been minutely crafted keeping safety, security, health and happiness of children as top priority. We actively engage parents to ensure that their children have the very best learning. We offer support services for parents which include sessions on child psychology, best practices for early year education etc. Each and every child is being given space for learning at their own speed and way.</p>
            <p>Our target is to provide an atmosphere that supports the growth of young children and foster the social, emotional and cognitive development in them. We foster a positive attitude for learning so as to help each child to reach his/her potential independently. We encourage children to become responsible and more citizens with a strong sense of self discipline.</p>
        </div>
        <div class="info-box" id="info-2">
            <p>
              <ol>
                    <li>Cognitive Development (Logical, Problem Solving, Early Math and Creative Skill)</li>
                    <li>Physical Development (Gross, Fine Motor Skills)</li>
                    <li>Social/Emotional Development</li>
                    <li>Language Development (Listening, Communication, Early Literacy Skill)</li>
                    <li>Self Help/Adaptive Development</li>
            </p>
        </div>
        <div class="info-box" id="info-3">
            <p>
                <ol>
                    <li>Multiple Intelligence</li>
                    <li>Role-Play</li>
                    <li>Theory of Constructivism</li>
                    <li>Project Method</li>
                    <li>Active-Play</li>
                </ol>
            </p>
        </div>
    </div>

    <section class="h10_about-area pt-40 pb-50">
        <div class="container">
        <table class="table table-bordered border-danger">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Particulars</th>
                    <th>Downloads</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1. </td>
                    <td>Play School Admission Form</td>
                    <td><a href="https://rungtapublicschool.ac.in/playschool/playschooladmissionform.pdf" class="theme-btn theme-btn-6">Download</a></td>
                </tr>
                <tr>
                    <td>2. </td>
                    <td>Play School Gallery</td>
                    <td><a href="https://rungtapublicschool.ac.in/playschoolgallary.php" class="theme-btn theme-btn-6">View</a></td>
                </tr>
                <tr>
                    <td>3. </td>
                    <td>Play School Hand book</td>
                    <td><a href="https://rungtapublicschool.ac.in/downloads/HandBook-RPS_2021-22.pdf" class="theme-btn theme-btn-6">Download</a></td>
                </tr>
                <tr>
                    <td>4. </td>
                    <td>Play School Prospectus</td>
                    <td><a href="https://rungtapublicschool.ac.in/playschool/playschoolprospectus.pdf" class="theme-btn theme-btn-6">Download</a></td>
                </tr>
                <tr>
                    <td>5. </td>
                    <td>Play School Fee Structure</td>
                    <td><a href="https://rungtapublicschool.ac.in/downloads/Fee_Structure_RPS_2023-24%20_Play_School_Durg.pdf   " class="theme-btn theme-btn-6">Download</a></td>
                </tr>
            </tbody>
        </table>
        </div>
    </section>

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
        function showInfo(index) {
            // Hide all information boxes
            const infoBoxes = document.querySelectorAll('.info-box');
            infoBoxes.forEach((box) => {
                box.classList.remove('active');
            });

            // Show the selected information box
            document.getElementById(`info-${index}`).classList.add('active');
        }
    </script>
    </body>

<!-- Mirrored from themephi.net/template/eduan/eduan/index-10.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 05:10:20 GMT -->
</html>