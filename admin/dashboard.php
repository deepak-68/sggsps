<?php
session_start();
include("db/config.php");

if (!isset($_SESSION["login_user"])) 
{
    header("location: index.php");
}

$query = "SELECT * FROM admin";
$result = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Control Managament System</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="">

    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    
    <!-- Header -->
   	<?php
		include("header.php");
	?>
	<!-- /Header -->

	<!-- navbar -->
	<?php
		include("navbar.php");
	?>
	<!-- /navbar -->


    <section class="pcoded-main-container">
        <div class="pcoded-content">
        <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <div class="row">
                                    <div class="col-md-5">
                                        <h5 style=" color:#003399; font-size:24px; font-weight:500; "> <i class="feather icon-clock"></i> &nbsp; <span id="ct6" style=" color:#003399; font-size:24px; font-weight:500; letter-spacing:2px;">10-10-2024 - 10:25:51: AM</span>
                                        </h5>
                                    </div>
                                    <div class="col-md-7">
                                        <h5 style=" color:#003399; font-size:24px; font-weight:500; "><i class="feather icon-server"></i>
                                            2401:4900:1c2b:e4c4:4d75:a874:82b2:9d95</h5>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_GET['loginin'])) 
            {
                $st = $_GET['loginin'];
                $st1 = base64_decode($st);

                if ($st1 > 0) 
                {
                    echo "  <div class='alert alert-success alert-dismissible fade show' role='alert' style='font-size:16px;' id='logged'>
                            <strong><i class='feather icon-check'></i>Welcome!</strong> User has been Login Successfully.
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                            </button>
                            </div> ";
                }
            }

            ?>

            <div class="row">
                <!-- order-card start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-c-blue order-card">
                        <div class="card-body">
                            <a href="manage-event.php"><h6 class="text-white">Events</h6></a>
                            <h2 class="text-right text-white"><i
                                    class="feather icon-message-square float-left"></i><span id="new1"></span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-c-green order-card">
                        <div class="card-body">
                            <a href="manage-news-achiev.php"><h6 class="text-white">News & Achievements</h6></a>
                            <h2 class="text-right text-white"><i
                                    class="feather icon-file-plus float-left"></i><span id="total"></span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-c-yellow order-card">
                        <div class="card-body">
                            <a href="manage-spotlight.php"><h6 class="text-white">Spotlights</h6></a>
                            <h2 class="text-right text-white"><i class="feather icon-box float-left"></i><span
                                    id="user"></span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-c-red order-card">
                        <div class="card-body">
                            <a href="manage-latest-news.php"><h6 class="text-white">Latest News</h6></a>
                            <h2 class="text-right text-white"><i class="feather icon-image float-left"></i><span
                                    id="new"></span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-c-yellow order-card">
                        <div class="card-body">
                            <a href="manage-faq.php"><h6 class="text-white">FAQ's</h6></a>
                            <h2 class="text-right text-white"><i
                                    class="feather icon-unlock float-left"></i><span id="new4"></span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-c-yellow order-card">
                        <div class="card-body">
                            <a href="manage-user.php"><h6 class="text-white">Admin Users</h6></a>
                            <h2 class="text-right text-white"><i
                                    class="feather icon-unlock float-left"></i><span id="new2"></span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card bg-c-red order-card">
                        <div class="card-body">
                            <a href="newsletter.php"><h6 class="text-white">Newsletter Subscription</h6></a>
                            <h2 class="text-right text-white"><i
                                    class="feather icon-users float-left"></i><span id="new3"></span>
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-xl-3">
                    <div class="card bg-c-blue order-card">
                        <div class="card-body">
                            <a href="other-leads.php"><h6 class="text-white">Leds</h6></a>
                            <h2 class="text-right text-white"><i class="feather icon-command float-left"></i><span
                                    id="new4"></span>
                            </h2>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-6 col-xl-3">
                    <div class="card bg-c-green order-card">
                        <div class="card-body">
                            <a href="manage-client.php"><h6 class="text-white">Clients</h6></a>
                            <h2 class="text-right text-white"><i class="feather icon-user float-left"></i><span
                                    id="new5"></span>
                            </h2>
                        </div>
                    </div>
                </div> -->
            </div>


            <div class="row">
<!--                 <div class="col-sm-12"> -->
<!--                     <div class="card"> -->
<!--                         <div class="card-header table-card-header"> -->
<!--                         </div> -->
<!--                     </div> -->
<!--                 </div> -->

                <div class="col-md-12 col-lg-4">
                    <div class="card">
                        <div class="card-block text-center">
                            <i class="fa fa-envelope-open text-c-blue d-block f-40"></i>
                            <h4 class="m-t-20"><span class="text-c-blue">8.62k</span> Subscribers</h4>
                            <p class="m-b-20">Your main list is growing</p>
                            <button class="btn btn-primary btn-sm btn-round">Manage List</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-block text-center">
                            <i class="fa fa-twitter text-c-green d-block f-40"></i>
                            <h4 class="m-t-20"><span class="text-c-blgreenue">+40</span> Followers</h4>
                            <p class="m-b-20">Your main list is growing</p>
                            <button class="btn btn-success btn-sm btn-round">Check them out</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-block text-center">
                            <i class="fa fa-puzzle-piece text-c-pink d-block f-40"></i>
                            <h4 class="m-t-20">Business Plan</h4>
                            <p class="m-b-20">This is your current active plan</p>
                            <button class="btn btn-danger btn-sm btn-round">Upgrade to VIP</button>
                        </div>
                    </div>
                </div>
                <!-- social statustic end -->
            </div>
        </div>
    </section>
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <!--<script src="assets/js/menu-setting.min.js"></script>-->

    <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/plugins/buttons.colVis.min.js"></script>
    <script src="assets/js/plugins/buttons.print.min.js"></script>
    <script src="assets/js/plugins/pdfmake.min.js"></script>
    <script src="assets/js/plugins/jszip.min.js"></script>
    <script src="assets/js/plugins/dataTables.buttons.min.js"></script>
    <script src="assets/js/plugins/buttons.html5.min.js"></script>
    <script src="assets/js/plugins/buttons.bootstrap4.min.js"></script>
    <script src="assets/js/pages/data-export-custom.js"></script>
</body>

<script>
$(document).ready(function() {
    setInterval(function() {


        $("#new").load("loadpost.php");
        refresh();

    }, 100);
});
</script>

<script>
$(document).ready(function() {
    setInterval(function() {


        $("#total").load("loadmenu.php");
        refresh();

    }, 100);
});
</script>

<script>
$(document).ready(function() {
    setInterval(function() {


        $("#user").load("load-category.php");
        refresh();

    }, 100);
});
</script>

<script>
$(document).ready(function() {
    setInterval(function() {


        $("#new1").load("loadpage.php");
        refresh();

    }, 100);
});
</script>

<script>
$(document).ready(function() {
    setInterval(function() {


        $("#new2").load("loadadmin.php");
        refresh();

    }, 100);
});
</script>

<script>
$(document).ready(function() {
    setInterval(function() {


        $("#new3").load("load-registered-users.php");
        refresh();

    }, 100);
});
</script>

<script>
$(document).ready(function() {
    setInterval(function() {


        $("#new4").load("loadleads.php");
        refresh();

    }, 100);
});
</script>

<script>
$(document).ready(function() {
    setInterval(function() {


        $("#new5").load("loadclients.php");
        refresh();

    }, 100);
});
</script>

<script>
$(document).ready(function() {
    $("#logged").delay(5000).slideUp(300);
});
</script>

<script>
function display_ct6() {
    var x = new Date()
    var ampm = x.getHours() >= 12 ? ' PM' : ' AM';
    hours = x.getHours() % 12;
    hours = hours ? hours : 12;
    var x1 = x.getMonth() + 1 + "-" + x.getDate() + "-" + x.getFullYear();
    x1 = x1 + " - " + hours + ":" + x.getMinutes() + ":" + x.getSeconds() + ":" + ampm;
    document.getElementById('ct6').innerHTML = x1;
    display_c6();
}

function display_c6() {
    var refresh = 1000; // Refresh rate in milli seconds
    mytime = setTimeout('display_ct6()', refresh)
}
display_c6()
</script>


</html>