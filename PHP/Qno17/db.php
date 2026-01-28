<?php
$host = "localhost";
$username = "root";
$password = ""; // Add your password if any
$database = "crud_app";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
