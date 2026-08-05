<?php
session_start();

if (!isset($_SESSION["login_user"])) {
    header("location: index.php");
}
include("db/config.php");

$query = "SELECT * FROM student_registration";
$result = mysqli_query($db, $query);

?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Student Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Codedthemes" />
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

    <?php (include 'header.php'); ?>
    <?php (include 'navbar.php'); ?>

    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Student Registration
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
                        </div>
                        <div class="card-body">
                            <form id="deleteForm" action="delete-student-registration.php" method="post">
                                <button type="button" id="deleteSelected" class="btn btn-danger mb-2" data-toggle="modal" data-target="#confirmDeleteModal">Delete Selected</button>
                                <div class="dt-responsive table-responsive">
                                    <!-- Confirmation Modal -->
                                    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete the selected Student?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="button" id="confirmDelete" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php

                                    if (isset($_GET['status'])) {
                                        $st = $_GET['status'];
                                        $st1 = base64_decode($st);

                                        if ($st1 > 0) {
                                            echo " <div class='alert alert-success alert-dismissible fade show' role='alert' style='font-size:16px;' id='updateuser'>
<strong><i class='feather icon-check'></i>Success!</strong> Student has been Updated Successfully.
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div> ";
                                        } else {

                                            echo " <div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='updateuser'>
<strong>Error!</strong> Student has been not Updated
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div> ";
                                        }
                                    }

                                    ?>
                                    <div class="dt-responsive table-responsive">
                                        <?php

                                        echo '<table id="basic-btn" class="table table-striped table-bordered nowrap">';
                                        echo "<thead>";
                                        echo "<tr>";
                                        echo "<th>SELECT</th>";
                                        echo "<th>SNO</th>";
                                        echo "<th>NAME</th>";
                                        echo "<th>FATHER NAME</th>";
                                        echo "<th>EMAIL</th>";
                                        echo "<th>MOBILE NUMBER</th>";
                                        echo "<th>DOB</th>";
                                        echo "<th>STATE</th>";
                                        echo "<th>MESSAGE</th>";
                                        echo "<th>SUBJECT</th>";
                                        echo "</tr>";
                                        echo "</thead>";

                                        $count = 1;
                                        echo "<tbody>";
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<tr>";
                                            echo "<td><input type='checkbox'  name='category_ids[]' class='appointment-checkbox' value='" . $row['0'] . "'></td>";

                                            // echo "<td><input type='checkbox'  name='category_ids[]' value='$encoded_id'></td>";
                                         echo "<td>$count</td>";
                                            echo "<td>" . $row[1] . "</td>";
                                            echo "<td>" . $row[2] . "</td>";
                                            echo "<td>" . $row[11] . "</td>";
                                            echo "<td>" . $row[9] . "</td>";
                                            echo "<td>" . $row[3] . "</td>";
                                            echo "<td>" . $row[7] . "</td>";
                                            echo "<td>" . $row[13] . "</td>";
                                            // echo "<td>" . $row[10] . "</td>";
                                            echo "<td>" . $row[12] . "</td>";
                                            echo "</tr>";
                                            $count++;
                                        }


                                        echo "</tfoot>";
                                        echo "</table>";
                                        ?>
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
            $('#deleteSelected').click(function() {
                var selectedIds = [];

                // Loop through each checkbox to find the selected ones
                $('.appointment-checkbox:checked').each(function() {
                    selectedIds.push($(this).val());
                });

                // If any checkboxes are selected, show the confirmation modal
                // if (selectedIds.length > 0) {
                //     $('#confirmDeleteModal').modal('show');
                // } else {
                //     alert('Please select at least one appointment to delete.');
                // }
            });

            // Handle confirmation of deletion
            $('#confirmDelete').click(function() {
                var selectedIds = [];

                // Loop through each checkbox to find the selected ones
                $('.appointment-checkbox:checked').each(function() {
                    selectedIds.push($(this).val());
                });

                // Send the selected IDs to the server for deletion
                $.post('delete-student-registration.php', {
                    ids: selectedIds
                }, function(response) {
                    // Reload the page after successful deletion
                    location.reload();
                });
            });
        });
    </script>

</body>

</html>