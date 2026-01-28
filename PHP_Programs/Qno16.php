<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "student_db";

try {
    // Create PDO connection
    $conn = new PDO(
        "mysql:host=$servername;dbname=$database",
        $username,
        $password
    );

    // Set error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Database connected successfully";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
