<?php
session_start();

// Hardcoded credentials for demo (replace with database check)
$valid_username = "admin";
$valid_password = "admin123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        // Set session variables
        $_SESSION['username'] = $username;
        $_SESSION['last_activity'] = time(); // track activity for timeout
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid username or password.<br>";
        echo "<a href='login.php'>Go back to login</a>";
    }
}
?>
