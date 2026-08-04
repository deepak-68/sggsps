<?php
include("admin/db/config.php");

// Check if the blog ID is provided in the URL
if (isset($_GET['id'])) {
    // Decode the base64-encoded ID
    $spotlight_id = intval(base64_decode($_GET['id']));

    // Debug: Check if the decoded ID is correct
    if (!$spotlight_id || !is_numeric($spotlight_id)) {
        echo "<p>Invalid or malformed ID.</p>";
        exit();
    }

    // Query to fetch the details of the selected blog post
    $query_event = "SELECT spotlight_id, title, spotlight_date, description FROM spotlight WHERE spotlight_id = ? AND status = 1";
    $stmt = $db->prepare($query_event);

    if ($stmt === false) {
        echo "<p>Failed to prepare the SQL statement. Error: " . $db->error . "</p>";
        exit();
    }

    // Bind the decoded ID to the statement
    $stmt->bind_param("i", $spotlight_id);

    // Execute the query
    $stmt->execute();

    // Get the result
    $result_notice = $stmt->get_result();

    // Check if the blog post is found
    if ($result_notice->num_rows > 0) {
        $row = $result_notice->fetch_assoc();

        // Extracting blog post details
        $title = $row["title"];
        $date = date("d M, Y", strtotime($row["spotlight_date"]));

        $description = $row["description"];
    } else {
        echo "<p>Achievement not found or has been removed.</p>";
        exit();
    }

    // Close the statement
    $stmt->close();
} else {
    echo "<p>Invalid request. ID parameter is missing in the URL.</p>";
    exit();
}


?>



<!Doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Spotlights | Shri Guru Gobind Singh Public School</title>
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
        <?php include('sidebar.php'); ?>
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
    <!-- header area end -->

    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
            <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="breadcrumb-title">Events</h2>
                            <div class="breadcrumb-list">
                                <a href="index.php">Home</a>
                                <span>Events</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- blog details area start -->
        <section class="blog_details-area pt-120 pb-80">
            <div class="container">
                <!-- <div class="blog_details-img">
                        <img src="admin/services/<?php echo $image; ?>" alt="">
                    </div> -->
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="blog_details-wrap mb-60">
                            <div class="blog_details-top mb-50">
                                <h3 class="blog_details-title"><?php echo $title; ?></h3>
                                <div class="blog_details-content">
                                <div class="blog_details-inner-text mr-80">
                                    <p class="mb-25"><?php echo $description; ?></p>
                                </div>
                            </div>

                            </div>
                            


                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="blog_details-sidebar mb-60">

                            <?php
                            require_once('spotlight-sidebar.php');
                            // Close the connection
                            $db->close();
                            ?>



                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course details area end -->

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