<?php
$host = "103.176.78.171";
$username = "root";
$password = "Abcd1234@";
$database = "dashboard";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
