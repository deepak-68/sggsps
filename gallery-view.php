<?php
include('admin/db/config.php');
?>
<!Doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gallery | Rungta Public School</title>
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
                            <h2 class="breadcrumb-title">Gallery</h2>
                            <div class="breadcrumb-list">
                                <a href="index.php">Home</a>
                                <span>Gallery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <section class="innerPage_gallery-area pt-110 pb-90">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-area-2 text-center">
                            <h2 class="section-title mb-50">Browse Our
                                Exclusive <span>Gallery <img src="assets/img/banner/2/line.png" alt=""></span>
                            </h2>
                        </div>
                    </div>

                </div>
                <div class="innerPage_gallery-wrap">
                    <div class="tab-content" id="pills-tabContent">
                        
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                        <div class="row">
                                            <?php

                                            // SQL query to fetch images and their associated categories
$sql = "SELECT gallery.*, 
gallery_category.category_name, 
post_gallery.category_id
FROM gallery 
LEFT JOIN post_gallery ON gallery.gallery_id = post_gallery.gallery_id
LEFT JOIN gallery_category ON post_gallery.category_id = gallery_category.category_id
WHERE gallery_category.category_id
ORDER BY gallery_category.category_name";

// Execute the query
$result = $db->query($sql);
// Get the category ID from the URL
$cat_id= isset($_GET['cid']) ? (int)$_GET['cid'] : 0;
if ($result->num_rows > 0) {
$gallery_by_category = []; // Initialize the array

while ($row = $result->fetch_assoc()) {
$category_id = $row['category_id'];
$category_name = $row['category_name'];

// Only process if the category_id matches the one from the URL
if ($category_id == $cat_id) {
// Check if the category already exists
if (!isset($gallery_by_category[$category_id])) {
    // If the category doesn't exist, initialize it
    $gallery_by_category[$category_id] = [
        'category_name' => $category_name,
        'images' => []
    ];
}

// Add the image to the category
$gallery_by_category[$category_id]['images'][] = $row;
}
}

// Display only the category that matches the target category ID
if (isset($gallery_by_category[$cat_id])) {
$category = $gallery_by_category[$cat_id];

foreach ($category['images'] as $image) {
                                                        
                                              // Display each image, customize as needed
           
            echo '<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="innerPage_gallery-item mb-30">
                <div class="innerPage_gallery-img">
                <a href="gallery-view.php?cid=' . $cat_id . '" >
               <img src="admin/gallery/' . htmlspecialchars($image['image']) . '" alt="gallery-img">
                </a>
                   
                </div>
                
                <div class="innerPage_gallery-content">
                    <a href="admin/gallery/' .htmlspecialchars($image['image']). '" class="popup-image"><i class="fa-thin fa-plus"></i></a>
                </div>
            </div>
           
        </div>';
                                        }
                                    } else {
                                        echo "No images found for this category.";
                                    }
                                } else {
                                    echo "No images found.";
                                }
                                ?>
                                            </div>
                                  
                                        </div>
                                    
                    </div>
                    
                </div>

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

</html>