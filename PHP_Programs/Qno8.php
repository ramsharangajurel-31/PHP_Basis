<?php
$email = "shilpy@example.com";
$password = "Password@123";

// Email validation
if (preg_match("/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/", $email)) {
    echo "Valid Email<br>";
} else {
    echo "Invalid Email<br>";
}

// Password validation
// Minimum 8 characters, one uppercase, one lowercase, one number
if (preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{8,}$/", $password)) {
    echo "Valid Password";
} else {
    echo "Invalid Password";
}
?>
