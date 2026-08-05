<?php
session_start();

if (!isset($_SESSION["login_user"])) {
    header("location: index.php");
}
include("db/config.php");

$query = "SELECT * From syllabus";

$result = mysqli_query($db, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>All Syllabus</title>

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

<body>

    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <!-- Header -->
    <?php include("header.php"); ?>
    <!-- /Header -->

    <!-- navbar -->
    <?php include("navbar.php"); ?>
    <!-- /navbar -->

    <section class="pcoded-main-container">
        <div class="pcoded-content">

            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">All Syllabus</h5>
                            </div>
<!--                             <ul class="breadcrumb"> -->
<!--                                 <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li> -->
<!--                             </ul> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                          <form id="deleteForm" action="delete-syllabus.php" method="post">
                         <button type="button" id="deleteSelected" class="btn btn-danger mb-2">Delete Selected</button>
                            <div class="dt-responsive table-responsive">
                                <?php
                                if (isset($_GET['status'])) {
                                    $st = $_GET['status'];
                                    $st1 = base64_decode($st);

                                    if ($st1 > 0) {
                                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert' style='font-size:16px;' id='gold'>
                                            <strong><i class='feather icon-check'></i>Success!</strong> Syllabus has been Updated Successfully.
                                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>";
                                    } else {
                                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='gold'>
                                            <strong>Error!</strong> Syllabus has not been Updated
                                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>";
                                    }
                                }
                                ?>

                                <br />

                                <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>SELECT</th> 
                                            <th>SNO</th>
                                            <th>NAME</th>
                                            <th>MATERIAL</th>
                                            <th>STATUS</th>
                                            <th>EDIT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr class='record'>";
                                            
                                            $encoded_id = base64_encode($row['syllabus_id']); // Encode the category ID
                                            
                                            echo "<td><input type='checkbox' name='event_ids[]' value='$encoded_id'></td>";
                                            
                                            echo "<td>" . $count++ . "</td>";
                                            
                                            echo "<td>" . $row['title'] . "</td>";
                                            
                                         
                                            
                                            echo "<td>
                                                <a href='study_material/" . $row['document'] . "' target='_blank'>
                                                    <button type='button' class='btn btn-primary'>View File</button>
                                                </a>
                                            </td>";
                                            echo "<td>" . ($row['status'] == 1 ? 'Enable' : 'Disable') . "</td>";

                                            echo "<td>
                                                <a href='edit-syllabus.php?id=$encoded_id' class='btn btn-warning'>
                                                    <i class='feather icon-edit'></i> Edit
                                                </a>
                                                <a href='delete-syllabus.php?id=$encoded_id' class='btn btn-danger' onclick='return confirm(\"Are you sure you want to delete this study material?\")'>
                                                    <i class='feather icon-trash'></i> Delete
                                                </a>
                                            </td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <br/>
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
    <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/pages/data-export-custom.js"></script>
    <script src="assets/js/plugins/dataTables.buttons.min.js"></script>
	<script src="assets/js/plugins/buttons.html5.min.js"></script>
	<script src="assets/js/plugins/buttons.bootstrap4.min.js"></script>
	<script src="assets/js/plugins/buttons.print.min.js"></script>
	<script src="assets/js/plugins/pdfmake.min.js"></script>
	<script src="assets/js/plugins/jszip.min.js"></script>
    
    <script>
    $(document).ready(function() {
        $("#gold").delay(5000).slideUp(300);
    });
    </script>
    
     <script>
        // JavaScript to handle deletion of selected categories
        document.getElementById("deleteSelected").addEventListener("click", function() {
            var form = document.getElementById("deleteForm");
            var checkboxes = form.querySelectorAll("input[type=checkbox]:checked");
            if (checkboxes.length === 0) {
                alert("Please select at least one syllabus to delete.");
            } else {
                if (confirm("Are you sure you want to delete the selected syllabus?")) {
                    form.submit();
                }
            }
        });
    </script>
    
</body>

</html>
