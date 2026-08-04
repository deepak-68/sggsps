<?php 
include('admin/db/config.php')
?>
<!Doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Notice Board | Rungta Public School</title>
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
        
    <!-- header area start -->
    <header>
        <?php
        require('inc/menu.php');
        ?>
    </header>
    <!-- header area end -->
        <!-- header area end -->

        <main>
            <!-- breadcrumb area start -->
            <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
                <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="breadcrumb-title">Notice Board</h2>
                                <div class="breadcrumb-list">
                                    <a href="index.php">Home</a>
                                    <span>Notice Board</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- blog area start -->
            <section class="innerPage_blog-area pt-120 pb-90">
                <div class="container">
                    <div class="row">
                    <?php 
            $sql = "SELECT * FROM notice_board where status =1 ORDER BY notice_date DESC" ;
            $result = ($db->query($sql));
            if ($result->num_rows>0){
                while ($row=$result->fetch_assoc()){
                    $news_id = $row['notice_id'];
                    $encoded_id = base64_encode($news_id);
                    $title = $row["title"];
                    $date = date("d M, Y", strtotime($row["notice_date"]));
                    $image = $row["image"];
                    $description = $row["description"];
                    ?>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="h2_blog-item mb-30">
                                <div class="h2_blog-img">
                                    <a href="event-details.php?id=<?php echo $encoded_id; ?>">
                                        <img src="admin/services/<?php echo $image; ?>" alt=""></a>
                                </div>
                                <div class="h2_blog-content">
                                    <div class="h2_blog-content-meta">
                                        <!-- <span><i class="fa-thin fa-user"></i>Admin</span> -->
                                        <span><i class="fa-regular fa-calendar-days"></i><?php echo $date; ?></span>
                                    </div>
                                    <h5 class="h2_blog-content-title"><a href="event-details.php?id=<?php echo $encoded_id; ?>"><?php echo $title; ?></a></h5>
                                    <a href="notice-board-details.php?id=<?php echo $encoded_id; ?>" class="theme-btn blog-btn theme-btn-6">Read More</a>
                                </div>
                            </div>
                           
               
                        </div>
                        <?php
                    }}
                    else{
                        echo "";
                    }
                            ?>   
                        
                        
                        
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="pagination-area mt-20 mb-30">
                                <ul>
                                    <li><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#"><i class="fa-light fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
            <!-- blog area end -->

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
        <script src="assets/js/main.js"></script>
    </body>

</html>