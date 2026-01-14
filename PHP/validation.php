<!-- 8. User Input Validation using Regex -->
 <?php
$email = "ram@example.com";
$password = "Pass1234";

// Email validation
if (preg_match("/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/", $email)) {
    echo "Valid Email<br>";
} else {
    echo "Invalid Email<br>";
}

// Password validation: at least 6 chars, 1 number
if (preg_match("/^(?=.*[0-9]).{6,}$/", $password)) {
    echo "Valid Password<br>";
} else {
    echo "Invalid Password<br>";
}
?>
