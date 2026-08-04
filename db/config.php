<?php
$host = "localhost";
$database = "sggsps";
$username = "root";
$password = "";

$db = mysqli_connect($host, $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
