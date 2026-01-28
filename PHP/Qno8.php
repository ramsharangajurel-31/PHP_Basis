<?php
// Sample user input
$email = "user@example.com";
$password = "Pass1234";

// Email validation using regex
$emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

// Password validation: Minimum 8 chars, at least one letter and one number
$passwordPattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";

// Validate email
if (preg_match($emailPattern, $email)) {
    echo "Valid email: $email\n";
} else {
    echo "Invalid email format.\n";
}

// Validate password
if (preg_match($passwordPattern, $password)) {
    echo "Valid password.\n";
} else {
    echo "Invalid password. Must be at least 8 characters and include letters and numbers.\n";
}
?>
