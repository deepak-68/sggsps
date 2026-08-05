<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "sggsps";

$db = mysqli_connect($host, $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
