<!-- 16 Write a PHP script to establish a secure connection with a MySQL database. -->
<?php
// Database credentials
$host = "localhost";      // or your DB host
$username = "root";       // MySQL username
$password = "";           // MySQL password
$dbname = "test_db";      // Database name

// Create a new mysqli connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL database successfully!";
}

// Close the connection (optional here)
$conn->close();
?>
