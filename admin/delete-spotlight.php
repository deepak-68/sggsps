<?php
include('db/config.php');

// Check if single spotlight ID is provided for deletion
if (isset($_GET['id'])) {
    // Single spotlight ID is provided
    $spot_id = base64_decode($_GET['id']);
    
    // Delete spotlight with provided ID
    $delete_query = "DELETE FROM spotlight WHERE spotlight_id = '$spot_id'";
    $delete_result = mysqli_query($db, $delete_query);
    
    if ($delete_result) {
        // Spotlight successfully deleted
        header("location: manage-spotlight.php?status=" . base64_encode(1)); // Redirect with success status
        exit(); // Terminate script execution after redirection
    } else {
        // Error occurred while deleting spotlight
        header("location: manage-spotlight.php?status=" . base64_encode(-1)); // Redirect with error status
        exit(); // Terminate script execution after redirection
    }
}

// Check if multiple spotlight IDs are provided for deletion
if (isset($_POST['spot_ids'])) {
    // Array to hold spotlight IDs
    $spot_ids = $_POST['spot_ids'];
    
    // Delete categories with provided IDs
    $success_count = 0;
    foreach ($spot_ids as $encoded_id) {
        $spot_id = base64_decode($encoded_id);
        $delete_query = "DELETE FROM spotlight WHERE spotlight_id = '$spot_id'";
        $delete_result = mysqli_query($db, $delete_query);
        
        if ($delete_result) {
            $success_count++;
        }
    }
    
    if ($success_count > 0) {
        // At least one spotlight deleted successfully
        header("location: manage-spotlight.php?status=" . base64_encode(1)); // Redirect with success status
        exit(); // Terminate script execution after redirection
    } else {
        // Error occurred while deleting categories
        header("location: manage-spotlight.php?status=" . base64_encode(-1)); // Redirect with error status
        exit(); // Terminate script execution after redirection
    }
}

// If no spotlight ID provided, redirect to all-categories.php with error status
header("location: manage-spotlight.php?status=" . base64_encode(-1));
exit(); // Terminate script execution after redirection
?>
