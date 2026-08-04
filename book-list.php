<!Doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Book List | Shri Guru Gobind Singh Public School</title>
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
              <h2 class="breadcrumb-title">Book List</h2>
              <div class="breadcrumb-list">
                <a href="index.php">Home</a>
                <span>Book List</span>
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
          require_once('academics-sidebar.php');
          ?>
          <!-- Content Area -->
          <main class="col-md-9 col-lg-9 list-content">
            <div class="mb-4">
               <h4>TBA</h4>
              <!-- <ul>
                <li><a href="https://rungtapublicschool.ac.in/downloads/Book%20List%20PG-UKG%20%202024%20-25.pdf" target="_blank"><i class="fa-solid fa-circle fa-xs" style="color: #990000;"></i> PG-UKG </a></li>
                <li><a href="https://rungtapublicschool.ac.in/downloads/Book%20List%20I-XII%202024%20-25%20.pdf" target="_blank"><i class="fa-solid fa-circle fa-xs" style="color: #990000;"></i> I-XII CBSE </a></li>
                <li><a href="https://rungtapublicschool.ac.in/downloads/CAMBRIDGE_TEXTBOOKS_CLASSES_1-6.pdf" target="_blank"><i class="fa-solid fa-circle fa-xs" style="color: #990000;"></i> I-VI Cambridge </a></li>
              </ul> -->
            </div>

          </main>
        </div>
      </div>
    </section>

    <!-- cta area start -->
    <div class="h6_cta-area ">
            <div class="container">
               <?php include('inc/cta.php');?>
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