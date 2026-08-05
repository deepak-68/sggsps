<?php
include("db/config.php");


// Single FAQ deletion
if (isset($_GET['id'])) {
    $faq_id = base64_decode($_GET['id']);
    $faq_id = mysqli_real_escape_string($db, $faq_id);

    // Delete the FAQ record from the database
    deleteFaq($db, [$faq_id]);

    // Redirect to the manage-faq.php page
    header("Location: manage-faq.php");
    exit();
}

// Multiple FAQ deletion
if (isset($_POST['faq_ids']) && is_array($_POST['faq_ids'])) {
    $encoded_ids = $_POST['faq_ids'];

    // Decode and sanitize FAQ IDs
    $faq_ids = [];
    foreach ($encoded_ids as $encoded_id) {
        $decoded_id = base64_decode($encoded_id);
        if ($decoded_id) {
            $faq_ids[] = mysqli_real_escape_string($db, $decoded_id);
        }
    }

    // Proceed if we have valid IDs
    if (!empty($faq_ids)) {
        deleteFaq($db, $faq_ids);
    }

    // Redirect to the manage-faq.php page
    header("Location: manage-faq.php");
    exit();
}

// Redirect if no ID is provided
header("Location: manage-faq.php");
exit();

// Function to delete FAQs
function deleteFaq($db, $faq_ids) {
    if (empty($faq_ids)) {
        return;
    }

    // Build the SQL query
    $ids = implode("','", $faq_ids);
    $delete_query = "DELETE FROM faq WHERE faq_id IN ('$ids')";

    if (!mysqli_query($db, $delete_query)) {
        // Log any SQL errors
        error_log("Error deleting FAQs: " . mysqli_error($db));
    }
}
?>
