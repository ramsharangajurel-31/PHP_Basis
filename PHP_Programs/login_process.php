<?php
session_start();

// Hardcoded credentials (for exam/demo)
$valid_user = "admin";
$valid_pass = "admin123";

if (isset($_POST['login'])) {

    // Sanitize input
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if ($username === $valid_user && $password === $valid_pass) {

        // Set session variables
        $_SESSION['username'] = $username;
        $_SESSION['login_time'] = time(); // session start time

        header("Location: dashboard.php");
    } else {
        echo "Invalid username or password";
    }
}
?>
