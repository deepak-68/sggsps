<?php
include("db/config.php");

// Check if a single event ID is provided for deletion
if (isset($_GET['id'])) {
    $event_id = base64_decode($_GET['id']);
    $event_id = mysqli_real_escape_string($db, $event_id);
    
    // Delete the service image file
    deleteEvent($db, $event_id);
    
    // Redirect to the manage-syllabus.php page
    header("Location: manage-syllabus.php");
    exit(); // Terminate script execution after redirection
}

// Check if multiple event IDs are provided for deletion
if (isset($_POST['event_ids'])) {
    $event_ids = $_POST['event_ids'];
    
    // Delete services with provided IDs
    foreach ($event_ids as $encoded_id) {
        $event_id = base64_decode($encoded_id);
        deleteEvent($db, $event_id);
    }
    
    // Redirect to the manage-syllabus.php page
    header("Location: manage-syllabus.php");
    exit(); // Terminate script execution after redirection
}

// If no service ID provided, redirect to manage-syllabus.php
header("Location: manage-syllabus.php");
exit(); // Terminate script execution after redirection

// Function to delete event image file and record from the database
function deleteEvent($db, $event_id) {
    $sql = "SELECT document FROM syllabus  WHERE syllabus_id = '$event_id'";
    $result = mysqli_query($db, $sql);
    
    if ($row = mysqli_fetch_assoc($result)) {
        $service_image = $row['document'];
        // $service_icon = $row['icon'];
        
        // Delete event image file
        $service_path = "study_material" . $service_image;
        // $service_icon_path = "services/" . $service_icon;
        if (file_exists($service_path)) {
            unlink($service_path);
            // unlink($service_icon_path);
        }
    }
    
    // Delete record from the database
    $delete_sql = "DELETE FROM syllabus WHERE syllabus_id = '$event_id'";
    mysqli_query($db, $delete_sql);
}
?>
