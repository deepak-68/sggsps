<?php
include('admin/db/config.php');

header('Content-Type: application/json'); // ✅ JSON response header set karein

$sql = "SELECT * FROM google_captcha";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$site_key = $row['site_key'];
$secret_key = $row['secret_key'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = mysqli_real_escape_string($db, trim($_POST['first_name']));
    $last_name = mysqli_real_escape_string($db, trim($_POST['last_name']));
    $email = mysqli_real_escape_string($db, trim($_POST['email']));
    $phone = mysqli_real_escape_string($db, trim($_POST['phone']));
    $message = mysqli_real_escape_string($db, trim($_POST['message']));
    $recaptcha_response = $_POST['g-recaptcha-response'];
    date_default_timezone_set('Asia/Kolkata'); // ✅ Set timezone to IST
    $currentDateTime = date("Y-m-d H:i:s"); // ✅ Get current date and time

    // ✅ Validate inputs
    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($message) || empty($recaptcha_response)) {
        echo json_encode(["success" => false, "message" => "Please fill in all fields correctly."]);
        exit();
    }

    // ✅ Validate phone number
    if (!preg_match('/^[789]\d{9}$/', $phone)) {
        echo json_encode(["success" => false, "message" => "Please enter a valid phone number (10 digits, starting with 7, 8, or 9)."]);
        exit();
    }

    // ✅ Verify reCAPTCHA
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_data = [
        'secret' => $secret_key,
        'response' => $recaptcha_response
    ];
    $recaptcha_options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($recaptcha_data),
        ],
    ];
    $recaptcha_context = stream_context_create($recaptcha_options);
    $recaptcha_result = file_get_contents($recaptcha_url, false, $recaptcha_context);
    $recaptcha_response = json_decode($recaptcha_result, true);

    // ✅ Insert data into the database
    $query = "INSERT INTO contact_us (first_name, last_name, email, phone, message) 
              VALUES ('$first_name', '$last_name', '$email', '$phone', '$message')";

    if (mysqli_query($db, $query)) {
        echo json_encode(["success" => true, "message" => "Thank you! Your message has been submitted successfully."]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: " . mysqli_error($db)]);
    }

    exit();
}
?>
