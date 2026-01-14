<!-- 8. User Input Validation using Regex -->
 <?php
// -----------------------------
// User Input (for demonstration)
// In real scenarios, these come from HTML forms via $_POST
// -----------------------------
$email = "ramsharan@example.com";
$password = "Passw0rd!";

// -----------------------------
// Email Validation
// -----------------------------
$emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

if (preg_match($emailPattern, $email)) {
    echo "Valid Email: $email<br>";
} else {
    echo "Invalid Email: $email<br>";
}

// -----------------------------
// Password Validation
// -----------------------------
$passwordPattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}$/";

if (preg_match($passwordPattern, $password)) {
    echo "Valid Password<br>";
} else {
    echo "Invalid Password. Password must be at least 8 characters long, ";
    echo "contain uppercase, lowercase, digit, and special character.<br>";
}
?>

