<?php
$host = "localhost";      // Database host
$username = "root";       // Database username
$password = "";           // Database password
$database = "test_db";    // Database name

// Create connection using MySQLi
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to MySQL database successfully!\n";

// Example: Using prepared statement to insert data securely
$name = "Ram";
$email = "ram@example.com";

$stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name, $email); // "ss" = two strings
try {
    $stmt->execute();
    echo "Data inserted successfully using prepared statement.\n";
} catch (mysqli_sql_exception $e) {
    echo "Error inserting data: " . $e->getMessage() . "\n";
}

// Close connections
$stmt->close();
$conn->close();
?>
