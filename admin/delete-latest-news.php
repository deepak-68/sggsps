<?php
include("db/config.php");
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if a single event ID is provided for deletion
if (isset($_GET['id'])) {
    $news_id = base64_decode($_GET['id']);
    $news_id = mysqli_real_escape_string($db, $news_id);
    
    // Delete the service image file
    deleteEvent($db, $news_id);
    
    // Redirect to the manage-event.php page
    header("Location: manage-latest-news.php");
    exit(); // Terminate script execution after redirection
}

// Check if multiple event IDs are provided for deletion
if (isset($_POST['news_ids'])) {
    $news_ids = $_POST['news_ids'];
    
    // Delete services with provided IDs
    foreach ($news_ids as $encoded_id) {
        $news_id = base64_decode($encoded_id);
        deleteEvent($db, $news_id);
    }
    
    // Redirect to the manage-event.php page
    header("Location: manage-latest-news.php");
    exit(); // Terminate script execution after redirection
}

// If no service ID provided, redirect to manage-event.php
header("Location: manage-latest-news.php");
exit(); // Terminate script execution after redirection

// Function to delete event image file and record from the database
function deleteEvent($db, $news_id) {
    $sql = "SELECT image FROM latest_news WHERE news_id = '$news_id'";
    $result = mysqli_query($db, $sql);
    
    if ($row = mysqli_fetch_assoc($result)) {
        $service_image = $row['image'];
        // $service_icon = $row['icon'];
        
        // Delete event image file
        $service_path = "services/" . $service_image;
        // $service_icon_path = "services/" . $service_icon;
        if (file_exists($service_path)) {
            unlink($service_path);
            // unlink($service_icon_path);
        }
    }
    
    // Delete record from the database
    $delete_sql = "DELETE FROM latest_news WHERE news_id = '$news_id'";
    mysqli_query($db, $delete_sql);
}
?>
