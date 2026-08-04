<!Doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cambridge Curriculum | Shri Guru Gobind Singh Public School</title>
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
    <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/academic.png">
      <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="breadcrumb-content">
              <h2 class="breadcrumb-title">Cambridge Curriculum</h2>
              <div class="breadcrumb-list">
                <a href="index.php">Home</a>
                <span>Cambridge Curriculum</span>
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
          require_once('academics-sidebar.php');
          ?>
          <!-- Content Area -->
          <main class="col-md-9 col-lg-9 list-content">
             <h4>TBA</h4>
            <!-- <div class="mb-4">
              <h5>Personalized, Project-Based, and Technology-Aided Learning
              </h5>
              <p align="justify">To implement the RPS teaching and learning philosophy, we follow the Cambridge curriculum and CBSE Curriculum in the Primary and Secondary years.</p>

              <div class="row justify-items-center">
                <div class="col-xl-12 col-lg-12 col-sm-12">
                  <img src="assets/img/facilities/cambridgecurriculum.jpg" alt="">
                </div>
              </div>
              <p align="justify">The curriculum at RPS is balanced and holistic, offering varied opportunities for students to learn and demonstrate their understanding. It enables students to develop knowledge and skills through disciplinary, transdisciplinary, and interdisciplinary approaches. The curriculum also encourages students to be reflective and to act on their learning in meaningful ways.
              </p>
              <p align="justify"><strong>Student learning is the highest priority at RPS. We believe that the most effective learning occurs in an environment where students feel understood, safe, and confident. Teaching and learning at RPS follow a constructivist approach, in which students actively build their understanding through interactions with teachers and peers.

                </strong></p>


            </div> -->

          </main>
        </div>
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