<!Doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FAQ's | Rungta Public School</title>
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
        <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
            <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="breadcrumb-title">FAQ's</h2>
                            <div class="breadcrumb-list">
                                <a href="index.html">Home</a>
                                <span>FAQ's</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
        <!-- faq area start -->
        <?php
        include 'admin/db/config.php'; // Include your database connection

        $query = "SELECT faq_question, faq_answer FROM faq";
        $result = $db->query($query);
        if ($result === false) {
            // If the query failed, show the error
            echo "Error: " . $db->error;
        } elseif ($result->num_rows > 0) {
            echo '<div class="h4_faq-area pt-90 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="h4_faq-wrap mb-50">
                    <div class="section-area-4 mb-30">
                        <h2 class="section-title mb-10">Frequently Asked Questions</h2>
                    </div>
                    <div class="h4_faq-content">
                        <div class="accordion" id="Expp">';

            $faqCount = 1;
            while ($row = $result->fetch_assoc()) {
                $question = htmlspecialchars($row['faq_question']);
                $answer = htmlspecialchars($row['faq_answer']);
                $headingId = "heading" . $faqCount;
                $collapseId = "collapse" . $faqCount;

                echo "<div class='accordion-item'>
        <h2 class='accordion-header' id='$headingId'>
            <button class='accordion-button " . ($faqCount === 1 ? "" : "collapsed") . "' type='button' data-bs-toggle='collapse' data-bs-target='#$collapseId' aria-expanded='" . ($faqCount === 1 ? "true" : "false") . "' aria-controls='$collapseId'>
                $question
            </button>
        </h2>
        <div id='$collapseId' class='accordion-collapse collapse " . ($faqCount === 1 ? "show" : "") . "' aria-labelledby='$headingId' data-bs-parent='#Expp'>
            <div class='accordion-body'>
                <p>$answer</p>
            </div>
        </div>
      </div>";

                $faqCount++;
            }

            echo '                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>';
        } else {
            echo "<p>No FAQs available at the moment.</p>";
        }

        $db->close();
        ?>
        <!-- faq area end -->








        <!-- cta area start -->
        <div class="h6_cta-area ">
            <div class="container">
               <?php include('inc/cta.php');?>
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