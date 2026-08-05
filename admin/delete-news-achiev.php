<?php
include("db/config.php");

// Check if a single News  ID is provided for deletion
if (isset($_GET['id'])) {
    $news_id = base64_decode($_GET['id']);
    $news_id = mysqli_real_escape_string($db, $news_id);
    
    // Delete the news image file
    deleteNews($db, $news_id);
    
    // Redirect to the manage-news-achiev.php page
    header("Location: manage-news-achiev.php");
    exit(); // Terminate script execution after redirection
}

// Check if multiple event IDs are provided for deletion
if (isset($_POST['news_ids'])) {
    $news_ids = $_POST['news_ids'];
    
    // Delete services with provided IDs
    foreach ($news_ids as $encoded_id) {
        $news_id = base64_decode($encoded_id);
        deleteNews($db, $news_id);
    }
    
    // Redirect to the manage-news-achiev.php page
    header("Location: manage-news-achiev.php");
    exit(); // Terminate script execution after redirection
}

// If no service ID provided, redirect to manage-news-achiev.php
header("Location: manage-news-achiev.php");
exit(); // Terminate script execution after redirection

// Function to delete news image file and record from the database
function deleteNews($db, $news_id) {
    $sql = "SELECT image FROM news WHERE news_id = '$news_id'";
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
    $delete_sql = "DELETE FROM news WHERE news_id = '$news_id'";
    mysqli_query($db, $delete_sql);
}
?>
