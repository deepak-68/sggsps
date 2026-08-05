<?php
session_start();
$upload_directory = "alumnis/";
error_reporting(E_ALL);
if (!isset($_SESSION["login_user"])) {
    header("location: index.php");
}

include("db/config.php");

$msg = "";  // Initialize the message variable

if (isset($_POST['submit'])) {
    // Get the form data
    $act = $_POST['category'];
    $designation = $_POST['designation'];
    $details = $_POST['editor1'];
    $status = $_POST['status'];  // Make sure status is being set
    $temp_name = $_FILES["uploaded_file"]["tmp_name"];
    $original_name = $_FILES["uploaded_file"]["name"];
    $file_size = $_FILES["uploaded_file"]["size"];
  

    // Check if status is set
    if ($status == "") {
        $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong><i class='feather icon-check'></i>Error!</strong> Please select a status.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
    } else {
        // Check if file type is allowed
        $allowed_types = ["image/jpeg", "image/png", "image/gif"];
        $file_type = mime_content_type($temp_name);
        
        if (!in_array($file_type, $allowed_types)) {
            $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong><i class='feather icon-check'></i>Error!</strong> Please upload a valid image file.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
        } else {
            // Check file size (less than 2MB)
            if ($file_size < 2 * 1024 * 1024) {
                $unique_filename = uniqid() . '_' . $original_name;
                move_uploaded_file($temp_name, $upload_directory . $unique_filename);
                
                // Insert into the database
                $query = "INSERT INTO alumni (name, message, image, status, designation) 
                          VALUES ('$act', '$details', '$unique_filename', '$status', '$designation')";
                
                if (mysqli_query($db, $query)) {
                    $msg = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong><i class='feather icon-check'></i>Success!</strong> Testimonial added successfully.
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>";
                } else {
                    $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                <strong><i class='feather icon-check'></i>Error!</strong> Something went wrong while inserting data.
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                            </div>";
                }
            } else {
                $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            <strong><i class='feather icon-check'></i>Error!</strong> File size exceeds the limit of 2MB.
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button>
                        </div>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Add Alumni Testimonials </title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php include("header.php"); ?>
    <?php include("navbar.php"); ?>

    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Add Alumni Testimonials</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header table-card-header">
                            <?php
                            if ($msg) {
                                echo $msg;
                            }
                            ?>

                            <br />

                            <form class="contact-us" method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            Name <span class="red-text">*</span>
                                            <input id="category" name="category" type="text" placeholder="Enter the Alumni Name" class="form-control input-md" required>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="form-group"> Designation <span class="red-text">*</span>
                                                <label class="sr-only control-label" for="name"> Designation<span class=" ">
                                                    </span></label>
                                                <input id="designation" name="designation" type="text"
                                                    placeholder=" Enter the Testimonial Designation" class="form-control input-md"
                                                    required
                                                    oninvalid="this.setCustomValidity('Please Enter Designation')"
                                                    oninput="setCustomValidity('')">
                                            </div>
                                        </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            Profile Pic (Max 2MB) <span class="red-text">*</span>
                                            <input name="uploaded_file" type="file" class="form-control input-md mr-2" required accept="image/*">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12 col-12">
                                        <div class="form-group">
                                            Status <span class="red-text">*</span>
                                            <select name="status" class="form-control" required>
                                                <option value="">Choose</option>
                                                <option value="1">Enable</option>
                                                <option value="0">Disable</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            Message <span class="red-text">*</span>
                                            <textarea class="form-control" rows="5" name="editor1" placeholder="Enter the Message" required></textarea>
                                        </div>
                                    </div> -->

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button type="submit" class="btn btn-secondary" name="submit">
                                            <i class="feather icon-save"></i>&nbsp; Add Testimonial
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
</body>

</html>
