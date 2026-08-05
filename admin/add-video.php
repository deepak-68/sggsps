<?php
session_start();
$upload_directory = "videos/";
error_reporting(0);
if (!isset($_SESSION["login_user"])) {
    header("location: index.php");
}

include("db/config.php");

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $VideoURL = $_POST['url'];
    $status = $_POST['status'];
    
    // Initialize variables for filenames
    $unique_image_filename = null;
    $unique_video_filename = null;
    
    // Handle image upload
    if (!empty($_FILES["image"]["tmp_name"])) {
        $image_temp_name = $_FILES["image"]["tmp_name"];
        $image_original_name = $_FILES["image"]["name"];
        $image_file_size = $_FILES["image"]["size"];
        $image_file_type = mime_content_type($image_temp_name);
        
        // Create separate directories for images and videos
        $image_directory = $upload_directory . 'thumbnail/';
        
        // Check if directories exist, create them if not
        if (!file_exists($image_directory)) {
            mkdir($image_directory, 0755, true);
        }
        
        // Image upload handling
        $allowed_image_types = ["image/jpeg", "image/png", "image/gif"];
        if (!in_array($image_file_type, $allowed_image_types)) {
            $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
            <strong><i class='feather icon-check'></i>Error!</strong> Please upload a valid image file.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
        } else {
            if ($image_file_size < 5 * 1024 * 1024) {
                $unique_image_filename = uniqid() . '_' . $image_original_name;
                move_uploaded_file($image_temp_name, $image_directory . $unique_image_filename);
            } else {
                $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
            <strong><i class='feather icon-check'></i>Error!</strong> Image file size exceeds the limit of 5MB.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
            }
        }
    }
    
    // Handle video upload
    if (!empty($_FILES["file"]["tmp_name"])) {
        $video_temp_name = $_FILES["file"]["tmp_name"];
        $video_original_name = $_FILES["file"]["name"];
        $video_file_size = $_FILES["file"]["size"];
        $video_file_type = mime_content_type($video_temp_name);
        
        $video_directory = $upload_directory . 'videos/';
        
        if (!file_exists($video_directory)) {
            mkdir($video_directory, 0755, true);
        }
        
        $allowed_video_types = ["video/mp4", "video/avi", "video/webm", "video/ogg", "video/ogv", "video/x-msvideo", "video/quicktime", "video/mpeg"];
        if (!in_array($video_file_type, $allowed_video_types)) {
            $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
            <strong><i class='feather icon-check'></i>Error!</strong> Please upload a valid video file.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
        } else {
            if ($video_file_size < 100 * 1024 * 1024) {
                $unique_video_filename = uniqid() . '_' . $video_original_name;
                move_uploaded_file($video_temp_name, $video_directory . $unique_video_filename);
            } else {
                $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
            <strong><i class='feather icon-check'></i>Error!</strong> Video file size exceeds the limit of 100MB.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
            }
        }
    }
    
    date_default_timezone_set('Asia/Kolkata');
    $uploadDate = date('Y-m-d H:i:s A');
    
    // Assuming $category_name is the name of the category you want to associate with the video
    $category_name = mysqli_real_escape_string($db, $category);
    
    // Retrieve the category_id based on the provided category_name
    $category_query = "SELECT category_id FROM category WHERE category_name = '$category_name'";
    $result = mysqli_query($db, $category_query);
    
    if ($row = mysqli_fetch_assoc($result)) {
        $category_id = $row['category_id'];
        
        // Insert data into the database
        $query = "INSERT INTO videos (category_id, category_name, video_title, video_description, video_filename, video_url, upload_date, thumbnail_url, status)
                  VALUES ('$category_id', '$category_name', '$title', '$description', '$unique_video_filename', '$VideoURL', '$uploadDate', '$unique_image_filename', '$status')";
        mysqli_query($db, $query);
        
        $msg = "<div class='alert alert-success alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
        <strong><i class='feather icon-check'></i>Thanks!</strong> Video record added successfully.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
    } else {
        // Handle the case where the category_name doesn't exist in the categories table
        $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
        <strong><i class='feather icon-check'></i>Error!</strong> Category not found.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Add New Video</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        .red-text {
            color: red;
    }     
    </style>
    
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
                                <h5 class="m-b-10">Add New Video
                                </h5>
                            </div>
<!--                             <ul class="breadcrumb"> -->
<!--                                 <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a> -->
<!--                                 </li> -->

<!--                             </ul> -->
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

                            <form class="contact-us" method="post" action="" enctype="multipart/form-data"
                                autocomplete="off">
                                <div class=" ">
                                    <!-- Text input-->
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                               <label for="title" class="form-label">Video Title <span class="red-text">*</span></label>
                    						   <input type="text" name="title" class="form-control" placeholder="Enter Video title" required>
                                            </div>
                                        </div>
               
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                           <div class="form-group">
                                               <label for="category_name" class="form-label">Category Name <span class="red-text">*</span></label>
                    								<?php
                                                        $category_query = "SELECT * FROM category WHERE status='1'";
                                                        $result = $db->query($category_query);
                                                        
                                                        if ($result->num_rows > 0) {
                                                            echo "<select name='category' class='form-control select' required>";
                                                            echo "<option value='' selected disabled>Choose</option>";

                                                            while ($row = $result->fetch_assoc()) {
                                                                 echo "<option value='{$row['category_name']}'>{$row['category_name']}</option>";
                                                            }
                                        
                                                             echo "</select>";
                                                         } 
                                                         else 
                                                         {
                                                              echo "No categories found.";
                                                          }
                                                     ?>
                                            	</div>
                                            </div>
                                            
                                        <!-- Video File Upload -->
        								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            								<div class="form-group">
                								<label for="video" class="form-label">Select Video</label>
                								<div class="input-group">
                    								<input type="file" name="file" class="form-control input-md mr-2" id="videoInput" onchange="showVideoPreviewButton()">
                    								<div class="input-group-append" id="previewButtonContainerVideo" style="display: none;">
                        								<button type="button" id="previewBtnVideo" class="btn btn-secondary" onclick="showVideoPreviewModal()">
                            								<i class="far fa-eye"></i> Preview *
                        								</button>
                    								</div>
                								</div>
                								<small class="text-muted"><span style="color: red;">*Upload supported file(Max 100MB)</span></small>
            								</div>
        								</div>

        								<!-- Modal for video preview -->
        								<div class="modal fade" id="videoPreviewModal" tabindex="-1" role="dialog" aria-labelledby="videoPreviewModalLabel" aria-hidden="true">
            								<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                								<div class="modal-content">
                    								<div class="modal-header">
                        								<h5 class="modal-title" id="videoPreviewModalLabel">Video Preview</h5>
                        								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            								<span aria-hidden="true">&times;</span>
                        								</button>
                    								</div>
                    								<div class="modal-body">
                        								<video id="videoPreview" controls style="max-width: 100%; height: auto;"></video>
                   								 	</div>
                								</div>
           								 	</div>
        								</div>

										<!-- Thumbnail Upload -->
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
    										<div class="form-group">
        										<label for="name" class="form-label">Video Thumbnail</label>
        										<div class="input-group">
            										<input type="file" name="image" id="imageInput" class="form-control input-md mr-2" accept="image/*" onchange="showThumbnailPreviewButton()">
            										<div class="input-group-append" id="previewButtonContainer" style="display: none;">
                										<button type="button" id="previewBtn" class="btn btn-secondary" onclick="showImagePreviewModal()">
                    										<i class="far fa-eye"></i> Preview *
                										</button>
            										</div>
        										</div>
        										<small class="text-muted"><span style="color: red;">*Upload supported file(Max 5MB)</span></small>
    										</div>
										</div>

										<!-- Modal for image preview -->
										<div class="modal fade" id="imagePreviewModal" tabindex="-1" role="dialog" aria-labelledby="imagePreviewModalLabel" aria-hidden="true">
    										<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        										<div class="modal-content">
            										<div class="modal-header">
                										<h5 class="modal-title" id="imagePreviewModalLabel">Image Preview</h5>
                										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    										<span aria-hidden="true">&times;</span>
                										</button>
            										</div>
            										<div class="modal-body">
                										<img id="previewImage" src="#" alt="Preview Image" style="max-width: 100%; height: auto;">
            										</div>
        										</div>
    										</div>
										</div>

                                        <!-- YouTube URL Input -->
										<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
     										<div class="form-group">
          										<label for="url" class="form-label">Video URL</label>
          										<div class="input-group">
              										<input type="text" id="urlInput" name="url" class="form-control input-md mr-2" placeholder="Enter Video URL" onchange="showUrlPreviewButton()">
              										<div class="input-group-append" id="previewButtonContainerUrl" style="display: none;">
                 										 <button type="button" id="previewBtnUrl" class="btn btn-secondary" onclick="showUrlPreviewModal()">
                      										<i class="far fa-eye"></i> Preview *
                  										</button>
          										     </div>
          										</div>
          										<small class="text-muted"><span style="color: red;">*Enter a valid YouTube URL</span></small>
      										</div>
  										</div>

  										<!-- Modal for YouTube URL preview -->
  										<div class="modal fade" id="urlPreviewModal" tabindex="-1" role="dialog" aria-labelledby="urlPreviewModalLabel" aria-hidden="true">
      										<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          										<div class="modal-content">
             										 <div class="modal-header">
                 										 <h5 class="modal-title" id="urlPreviewModalLabel">Video URL Preview</h5>
                  										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     										 <span aria-hidden="true">&times;</span>
                  										</button>
             										 </div>
              										<div class="modal-body">
                  										<iframe id="urlPreview" width="100%" height="450" frameborder="0" allowfullscreen></iframe>
             										 </div>
         										 </div>
     										 </div>
  										</div>
                                        
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                           	<div class="form-group">
                                               	<label for="status" class="form-label">Status <span class="red-text">*</span></label>
                                                	<select id="" name="status" class="form-control" required>
                                                		<option value="" selected disabled>Choose</option>
                                                    	<option value="1">Enable</option>
                                                    	<option value="0">Disable</option>
                                                	</select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group"> 
                                                <label for="description" class="form-label">Video Description</label>
                                                <textarea class="form-control" rows="5" cols="45" name="description"
                                                    placeholder="Enter the Video Description"></textarea>
                                            </div>
                                        </div>
  
                                        <!-- Button -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button type="submit" class="btn btn-secondary" name="submit" id="submit">
                                                <i class="feather icon-save"></i>&nbsp; Add Video
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="dt-responsive table-responsive">
                            </div>
                        </div>
                    </div>
                </div>
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
    <script>
    $(document).ready(function() {
        $("#goldmessage").delay(5000).slideUp(300);
    });
    </script>
    
<script>
function showThumbnailPreviewButton() {
    var input = document.getElementById('imageInput');
    var previewButtonContainer = document.getElementById('previewButtonContainer');

    if (input.files && input.files[0]) {
        previewButtonContainer.style.display = 'inline-block';
    } else {
        previewButtonContainer.style.display = 'none';
    }
}

function showImagePreviewModal() {
    var modal = document.getElementById('imagePreviewModal');
    var modalImg = document.getElementById('previewImage');
    var files = document.getElementsByName('image')[0].files;

    if (files.length > 0) {
        var file = files[0];
        var reader = new FileReader();

        reader.onload = function (e) {
            modalImg.src = e.target.result;
            $(modal).modal('show');
        }

        reader.readAsDataURL(file);
    }
}

function showVideoPreviewButton() {
    var input = document.getElementById('videoInput');
    var previewButtonContainer = document.getElementById('previewButtonContainerVideo');

    if (input.files && input.files[0]) {
        previewButtonContainer.style.display = 'inline-block';
    } else {
        previewButtonContainer.style.display = 'none';
    }
}

function showVideoPreviewModal() {
    var modal = document.getElementById('videoPreviewModal');
    var modalVideo = document.getElementById('videoPreview');
    var files = document.getElementsByName('file')[0].files;

    if (files.length > 0) {
        var file = files[0];
        var reader = new FileReader();

        reader.onload = function (e) {
            modalVideo.src = e.target.result;
            $(modal).modal('show');
        }

        reader.readAsDataURL(file);
    }
}

function showUrlPreviewButton() {
    var urlInput = document.getElementById('urlInput').value;
    var previewButtonContainer = document.getElementById('previewButtonContainerUrl');

    if (urlInput && isValidYouTubeUrl(urlInput)) {
        previewButtonContainer.style.display = 'inline-block';
    } else {
        previewButtonContainer.style.display = 'none';
    }
}

function showUrlPreviewModal() {
    var urlInput = document.getElementById('urlInput').value;
    var urlPreview = document.getElementById('urlPreview');
    var youtubeUrl = `https://www.youtube.com/embed/${extractYouTubeVideoId(urlInput)}`;

    if (youtubeUrl) {
        urlPreview.src = youtubeUrl;
        $('#urlPreviewModal').modal('show');
    }
}

function extractYouTubeVideoId(url) {
    var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
    var match = url.match(regExp);
    return (match && match[2].length == 11) ? match[2] : null;
}

function isValidYouTubeUrl(url) {
    var regExp = /^(https?\:\/\/)?(www\.youtube\.com|youtu\.?be)\/.+$/;
    return regExp.test(url);
}
</script>

</body>
</html>