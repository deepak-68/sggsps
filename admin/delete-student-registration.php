<?php
session_start();

if (!isset($_SESSION["login_user"])) {
    header("location: index.php");
    exit; // Ensure no further code execution after redirection
}

// Check if the request contains the IDs to delete
if (isset($_POST['ids']) && is_array($_POST['ids'])) {
    // Include database configuration file
    include("db/config.php");

    // Escape and sanitize the IDs to prevent SQL injection
    $contactIds = array_map('intval', $_POST['ids']);

    // Construct the SQL query to delete the Contact
    $query = "DELETE FROM newsletter WHERE student_id  IN (" . implode(',', $contactIds) . ")";

    // Execute the query
    if (mysqli_query($db, $query)) {
        // contact(s) deleted successfully
        echo "Student deleted successfully.";
    } else {
        // Error occurred while deleting Contact
        echo "Error: " . mysqli_error($db);
    }

    // Close database connection
    mysqli_close($db);
} else {
    // No appointment IDs provided in the request
    echo "No Student IDs provided.";
}
