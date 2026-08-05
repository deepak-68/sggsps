<?php
include("db/config.php");

// Check if a single team ID is provided for deletion
if (isset($_GET['id'])) {
    $team_id = base64_decode($_GET['id']);
    $team_id = mysqli_real_escape_string($db, $team_id);
    
    // Delete the team member image file from the server directory
    deleteTeamMemberImage($db, $team_id);
    
    // Delete the team member record from the database
    deleteTeamMember($db, $team_id);
    
    // Redirect to the manage-team-member.php page
    header("Location: manage-team-member.php");
    exit(); // Terminate script execution after redirection
}

// Check if multiple team member IDs are provided for deletion
if (isset($_POST['team_ids'])) {
    $testimonial_ids = $_POST['team_ids'];
    
    // Delete team member and their associated image files with provided IDs
    foreach ($testimonial_ids as $encoded_id) {
        $team_id = base64_decode($encoded_id);
        
        // Delete the testimonial image file from the server directory
        deleteTeamMemberImage($db, $team_id);
        
        // Delete the team member record from the database
        deleteTeamMember($db, $team_id);
    }
    
    // Redirect to the manage-team-member.php page
    header("Location: manage-team-member.php");
    exit(); // Terminate script execution after redirection
}

// If no team member ID provided, redirect to manage-team-member.php
header("Location: manage-team-member.php");
exit(); // Terminate script execution after redirection

// Function to delete the team member image file from the server directory
function deleteTeamMemberImage($db, $team_id) {
    $image_query = "SELECT image FROM team WHERE team_id = '$team_id'";
    $image_result = mysqli_query($db, $image_query);
    $image_row = mysqli_fetch_assoc($image_result);
    $image_filename = $image_row['image'];
    $image_path = "team/" . $image_filename;
    if (file_exists($image_path)) {
        unlink($image_path);
    }
}

// Function to delete the team member record from the database
function deleteTeamMember($db, $team_id) {
    $delete_query = "DELETE FROM team WHERE team_id = '$team_id'";
    mysqli_query($db, $delete_query);
}
?>
