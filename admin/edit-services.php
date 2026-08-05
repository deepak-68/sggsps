<?php
session_start();
$upload_directory = "services/";
error_reporting(0);
if (!isset($_SESSION["login_user"])) {
    header("location: index.php");
}

include("db/config.php");

// Check if service ID is provided
if (!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}

$service_id = base64_decode($_GET['id']);

// Fetch service details from the database
$query = "SELECT * FROM services WHERE service_id = $service_id";
$result = mysqli_query($db, $query);
$service = mysqli_fetch_assoc($result);

$existingTitle = $service['title'];
$existingDescription = $service['description'];
$existingStatus = $service['status'];

// Update service
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['service_description'];
    $status = $_POST['status'];
    
    // Check if new image is uploaded
    if ($_FILES["uploaded_file"]["size"] > 0) {
        $temp_name = $_FILES["uploaded_file"]["tmp_name"];
        $original_name = $_FILES["uploaded_file"]["name"];
        $file_size = $_FILES["uploaded_file"]["size"];
        
        $allowed_types = ["image/jpeg", "image/png", "image/gif", "image/svg+xml"];
        
        $is_svg = strtolower(pathinfo($original_name, PATHINFO_EXTENSION)) === 'svg';
        
        if ($is_svg) {
            $allowed_types[] = "image/svg+xml";
        }
        
        $file_type = mime_content_type($temp_name);
        
        if (!in_array($file_type, $allowed_types) && !$is_svg) {
            $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
        <strong><i class='feather icon-check'></i>Error !</strong> Please Upload Image File.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
        } else {
            if ($file_size < 2 * 1024 * 1024) {
                $unique_filename = uniqid() . '_' . $original_name;
                move_uploaded_file($temp_name, $upload_directory . $unique_filename);
                
                // Update image field in the database
                $query = "UPDATE services SET image = '$unique_filename' WHERE service_id = $service_id";
                mysqli_query($db, $query);
            } else {
                $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
        <strong><i class='feather icon-check'></i>Error !</strong> File size exceeds the limit of 2MB.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
            }
        }
    }
    
    // Check if new icon is uploaded
    if ($_FILES["uploaded_icon"]["size"] > 0) {
        $temp_icon_name = $_FILES["uploaded_icon"]["tmp_name"];
        $original_icon_name = $_FILES["uploaded_icon"]["name"];
        $icon_size = $_FILES["uploaded_icon"]["size"];
        
        $is_svg = strtolower(pathinfo($original_icon_name, PATHINFO_EXTENSION)) === 'svg';
        
        if ($is_svg) {
            $allowed_types[] = "image/svg+xml";
        }
        
        $icon_type = mime_content_type($temp_icon_name);
        
        if (!in_array($icon_type, $allowed_types) && !$is_svg) {
            $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
        <strong><i class='feather icon-check'></i>Error !</strong> Please Upload Icon File.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
        } else {
            if ($icon_size < 2 * 1024 * 1024) {
                $unique_iconname = uniqid() . '_' . $original_icon_name;
                move_uploaded_file($temp_icon_name, $upload_directory . $unique_iconname);
                
                // Update icon field in the database
                $query = "UPDATE services SET icon = '$unique_iconname' WHERE service_id = $service_id";
                mysqli_query($db, $query);
            } else {
                $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='goldmessage'>
        <strong><i class='feather icon-check'></i>Error !</strong> File size exceeds the limit of 2MB.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
            }
        }
    }
    
    // Update other service details in the database
    $query = "UPDATE services SET title = '$title', description = '$description', status = '$status' WHERE service_id = $service_id";
    mysqli_query($db, $query);
    
    // Redirect to some page after updating service
    $status_code = base64_encode(1);
    echo ("<script>window.location.href='manage-services.php?status=$status_code';</script>");
}
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title> Update Services </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/plugins/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    
    <script src="https://cdn.tiny.cloud/1/w9s9fz3wcjh5gsl1vp3uc6ka4gjtwty0jxcq12z65kb0svwi/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
     
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
                                <h5 class="m-b-10">Update Services
                                </h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a>
                                </li>
                            </ul>
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
                                                <label for="title" class="form-label">Service Title <span class="red-text">*</span></label>
                                                <input type="text" name="title" class="form-control"
                                                    placeholder="Enter Service Title" value="<?php echo $existingTitle; ?>"
                                                    required>
                                            </div>
                                        </div>
 
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
    										<div class="form-group">
        										<label for="name" class="form-label">Image <span class="red-text">*</span></label>
        										<div class="input-group">
            										<input type="file" name="uploaded_file" id="imageInput" class="form-control input-md mr-2" accept="image/*" onchange="showPreviewButton()">
            										<div class="input-group-append" id="previewButtonContainer" style="display: none;">
               	 										<button type="button" id="previewBtn" class="btn btn-secondary" onclick="showPreviewModal()">
                    											<i class="far fa-eye"></i> Preview *
                										</button>
            										</div>
        										</div>
       											<small class="text-muted">Leave it blank if you don't want to change the image.</small>
    										</div>
										</div>

                                         <!-- Modal Start -->
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
                                        <!-- Modal end -->
                                        
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
    										<div class="form-group">
        										<label for="name" class="form-label">Service Icon <span class="red-text">*</span></label>
        										<div class="input-group">
            										<input type="file" name="uploaded_icon" id="iconInput" class="form-control input-md mr-2" accept="image/*" onchange="showIconPreviewButton()">
            										<div class="input-group-append" id="iconPreviewButtonContainer" style="display: none;">
    													<button type="button" id="previewIconBtn" class="btn btn-secondary" onclick="showIconPreviewModal()">
        													<i class="far fa-eye"></i> Preview *
    													</button>
													</div>
        										</div>
       											<small class="text-muted">Leave it blank if you don't want to change the image.</small>
    										</div>
										</div>

                                         <!-- Icon Preview Modal -->
    									<div class="modal fade" id="iconPreviewModal" tabindex="-1" role="dialog" aria-labelledby="iconPreviewModalLabel" aria-hidden="true">
        									<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            									<div class="modal-content">
                									<div class="modal-header">
                    									<h5 class="modal-title" id="iconPreviewModalLabel">Icon Preview</h5>
                    									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        									<span aria-hidden="true">&times;</span>
                    									</button>
                									</div>
                									<div class="modal-body">
                    									<img id="previewIcon" src="#" alt="Preview Icon" style="max-width: 100%; height: auto;">
                									</div>
            									</div>
        									</div>
    									</div>
                                        <!-- Icon Preview Modal end -->
            
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label for="status" class="form-label">Status <span class="red-text">*</span></label>
                                                <select id="" name="status" class="form-control" required>
                                                    <option value="" selected disabled>Choose</option>
                                                    <option value="1" <?php echo ($existingStatus == 1) ? 'selected' : ''; ?>>
                                                        Enable</option>
                                                    <option value="0" <?php echo ($existingStatus != 1) ? 'selected' : ''; ?>>
                                                        Disable</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label for="details" class="form-label">Service Description <span class="red-text">*</span></label>
                                                <textarea class="form-control" rows="5" cols="45" 
                                                    name="service_description"><?php echo $existingDescription; ?></textarea>
                                            </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button type="submit" class="btn btn-secondary" name="submit"
                                                id="submit">
                                                <i class="feather icon-save"></i>&nbsp; Update Service
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
        $(document).ready(function () {
            $("#goldmessage").delay(5000).slideUp(300);
        });
    </script>
    
    <script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'advlist autolink lists link image imagetools charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount hr nonbreaking toc textpattern emoticons contextmenu directionality emoticons importcss lists noneditable pagebreak save spellchecker tabfocus template tinydrive',
        toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor | removeformat | link unlink | image media | code | hr | table | emoticons | toc | contextmenu | directionality | nonbreaking | pagebreak | save | spellchecker | tabfocus | template | tinydrive',
        menubar: 'file edit view insert format tools table help',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author Name',
        branding: false,
        contextmenu: "paste | link image inserttable | cell row column deletetable",
        importcss_append: true,
        templates: [
            { title: 'Test template 1', content: '<b>This is a test template.</b>' },
            { title: 'Test template 2', content: '<i>This is another test template.</i>' }
        ],
        tinydrive_token_provider: 'URL_TO_YOUR_TOKEN_PROVIDER',
        tinydrive_dropbox_app_key: 'YOUR_DROPBOX_APP_KEY'
    });
	</script>
    
    <script>
    function showPreviewButton() {
        var input = document.getElementById('imageInput');
        var previewButtonContainer = document.getElementById('previewButtonContainer');

        if (input.files && input.files[0]) {
            previewButtonContainer.style.display = 'block';
        } else {
            previewButtonContainer.style.display = 'none';
        }
    }
	</script>
    
    <script>
    // Function to show the preview modal
    function showPreviewModal() {
        var modal = document.getElementById('imagePreviewModal');
        var modalImg = document.getElementById('previewImage');
        var files = document.getElementsByName('uploaded_file')[0].files;

        // Check if any file is selected
        if (files.length > 0) {
            var file = files[0];
            var reader = new FileReader();

            reader.onload = function (e) {
                modalImg.src = e.target.result;
                $(modal).modal('show'); // Show the modal
            }

            reader.readAsDataURL(file);
        }
    }
	</script>
	
	<script>
    	// Function to show the icon preview button when a file is selected
   		function showIconPreviewButton() {
    		var input = document.getElementById('iconInput');
    		var previewButtonContainer = document.getElementById('iconPreviewButtonContainer');

    		if (input.files && input.files[0]) {
        		previewButtonContainer.style.display = 'block';
    		} else {
        	previewButtonContainer.style.display = 'none';
    	}
	}

	function showIconPreviewModal() {
    	var modal = document.getElementById('iconPreviewModal');
    	var modalImg = document.getElementById('previewIcon');
    	var files = document.getElementsByName('uploaded_icon')[0].files;

    	if (files.length > 0) {
        	var file = files[0];
        	var reader = new FileReader();

        	reader.onload = function(e) {
            	modalImg.src = e.target.result;
            	$(modal).modal('show');
        	}
        	reader.readAsDataURL(file);
    	}
	}
	</script>

</body>
</html>
