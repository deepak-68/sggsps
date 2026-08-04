<?php 
include('admin/db/config.php')
?>
<!Doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>News Achievements | Rungta Public School</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
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
                                <h2 class="breadcrumb-title">News & Achievements</h2>
                                <div class="breadcrumb-list">
                                    <a href="index.html">Home</a>
                                    <span>News & Achievements</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- blog area start -->
            <div class="events-area pb-75 pt-100">
            <div class="container">
                <div class="row justify-content-center" data-cues="slideInUp">
                <?php
                    $sql = "SELECT * FROM news WHERE status=1 ORDER BY news_date DESC LIMIT 3";
                    $result = $db->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $news_id = $row['news_id'];
                            $encoded_id = base64_encode($news_id);
                            $des = $row['description']; // Ensure $des is initialized here
                            $image = $row['image'];
                            $date = $row['news_date']; // Assuming this is in a format like 'YYYY-MM-DD'
                            $day = date('d', strtotime($date));  // Extracts the day (e.g., '07')
                            $month = date('M', strtotime($date)); // Extracts the abbreviated month name (e.g., 'Dec')
                            $title = $row['title'];

                            // Limit description to 15 words
                            if (!empty($des)) { // Check if description is not empty
                                $desc_words = explode(" ", $des);
                                if (count($desc_words) > 15) {
                                    $desc_words = array_slice($desc_words, 0, 15); // Get first 15 words
                                    $desc = implode(" ", $desc_words) . "..."; // Add ellipsis at the end
                                } else {
                                    $desc = $des; // If description has less than 15 words, use the full description
                                }
                            } else {
                                $desc = ""; // Fallback in case description is empty
                            }
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-events-card">
                            <a class="text-decoration-none d-block image" href="news-achievements-details.php?id=<?php echo $encoded_id; ?>">
                            <img src="admin/services/<?php echo $image; ?>" alt="event-image">
                            </a>
                            <div class="content d-flex align-items-top">
                                <div class="date">
                                    <h2><?php echo $day; ?></h2>
                                    <span><?php echo $month; ?></span>
                                </div>
                                <div class="title">
                                    <h3>
                                        <a class="text-decoration-none" href="news-achievements-details.php?id=<?php echo $encoded_id; ?>"><?php echo $title; ?></a>
                                    </h3>
                                    <span class="d-flex align-items-center">
                                    <i class="fa-regular fa-calendar-days"></i>
                                        12:00 PM - 02:00 PM
                                    </span>
                                    <span class="d-flex align-items-center">
                                    <i class="fa-solid fa-location-dot"></i>
                                        St. John's, Newfoundland Labrador
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    } else {
                        echo "No news available";
                    }
                    ?>
                    
                </div>
                <!-- above row -->
            </div>
        </div>
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

<!-- Mirrored from themephi.net/template/eduan/eduan/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 05:10:28 GMT -->
</html>