<?php 
include('admin/db/config.php')
?>
<!Doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Events | Rungta Public School</title>
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
            .pagination-area ul li a.active{
                background: #0d6efd; /* Your theme color */
                color: #fff;
                border-color: #0d6efd;
            }

            .pagination-area ul{
                display:flex;
                justify-content:end;
                gap:8px;
                list-style:none;
                padding:0;
            }

            .pagination-area ul li a{
                display:flex;
                align-items:center;
                justify-content:center;
                width:40px;
                height:40px;
                border:1px solid #ddd;
                border-radius:5px;
                text-decoration:none;
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
                                    <a href="index.php">Home</a>
                                    <span>News & Achievements</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- blog area start -->

            <?php
                $limit = 6;

                $page = isset($_GET['page']) && $_GET['page'] > 0 ? (int)$_GET['page'] : 1;
                $offset = ($page - 1) * $limit;

                $totalQuery = "SELECT COUNT(*) AS total FROM news WHERE status = 1";
                $totalResult = $db->query($totalQuery);
                $totalRow = $totalResult->fetch_assoc();
                $totalRecords = $totalRow['total'];

                $totalPages = ceil($totalRecords / $limit);

                $sql = "SELECT * FROM news
                        WHERE status = 1
                        ORDER BY news_date DESC
                        LIMIT $offset, $limit";

                $result = $db->query($sql);
            ?>
            <section class="innerPage_blog-area pt-120 pb-90">
                <div class="container">
                    <div class="row">
                    
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {

                                $news_id = $row['news_id'];
                                $encoded_id = base64_encode($news_id);
                                $title = $row['title'];
                                $date = date("d M, Y", strtotime($row['news_date']));
                                $image = $row['image'];
                        ?>

                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="h2_blog-item mb-30">
                                <div class="h2_blog-img">
                                    <a href="news-achivement-details.php?id=<?php echo $encoded_id; ?>">
                                        <img src="admin/services/<?php echo $image; ?>"
                                            style="width:100%;height:250px;object-fit:cover;">
                                    </a>
                                </div>

                                <div class="h2_blog-content">
                                    <div class="h2_blog-content-meta">
                                        <span>
                                            <i class="fa-regular fa-calendar-days"></i>
                                            <?php echo $date; ?>
                                        </span>
                                    </div>

                                    <h5 class="h2_blog-content-title">
                                        <a href="news-achivement-details.php?id=<?php echo $encoded_id; ?>">
                                            <?php echo $title; ?>
                                        </a>
                                    </h5>

                                    <a href="news-achivement-details.php?id=<?php echo $encoded_id; ?>"
                                        class="theme-btn blog-btn theme-btn-6">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>

                        <?php
                            }
                        } else {
                            echo "<div class='col-12 text-center'>No News Found.</div>";
                        }
                        ?>                       
                        
                    </div>
                    <div class="row">
                        <?php
                            $from = ($totalRecords > 0) ? $offset + 1 : 0;
                            $to = min($offset + $limit, $totalRecords);
                            ?>

                            <div class="row align-items-center">

                                <!-- Showing Records -->
                                <div class="col-md-6">
                                    <div class="pagination-info">
                                        Showing <strong><?php echo $from; ?></strong>
                                        to <strong><?php echo $to; ?></strong>
                                        of <strong><?php echo $totalRecords; ?></strong> entries
                                    </div>
                                </div>

                                <!-- Pagination -->
                                <div class="col-md-6">
                                    <div class="pagination-area mt-20 mb-30 text-md-end">
                                        <ul>

                                            <!-- Previous -->
                                            <?php if ($page > 1) { ?>
                                                <li>
                                                    <a href="?page=<?php echo ($page - 1); ?>">
                                                        <i class="fa-light fa-angle-left"></i>
                                                    </a>
                                                </li>
                                            <?php } ?>

                                            <!-- Page Numbers -->
                                            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                                                <li>
                                                    <a href="?page=<?php echo $i; ?>"
                                                    class="<?php echo ($i == $page) ? 'active' : ''; ?>">
                                                        <?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>
                                                    </a>
                                                </li>
                                            <?php } ?>

                                            <!-- Next -->
                                            <?php if ($page < $totalPages) { ?>
                                                <li>
                                                    <a href="?page=<?php echo ($page + 1); ?>">
                                                        <i class="fa-light fa-angle-right"></i>
                                                    </a>
                                                </li>
                                            <?php } ?>

                                        </ul>
                                    </div>
                                </div>

                            </div>
                    </div>

                    </div>
                    </section>
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

<!-- Mirrored from themephi.net/template/eduan/eduan/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 05:10:28 GMT -->
</html>