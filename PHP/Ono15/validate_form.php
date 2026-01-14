<?php
// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data); // Remove extra spaces
    $data = stripslashes($data); // Remove slashes
    $data = htmlspecialchars($data); // Convert special characters to HTML entities
    return $data;
}

// Initialize variables and error messages
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate Name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required.";
    } else {
        $name = sanitize_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters, apostrophes, and spaces allowed in name.";
        }
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
    } else {
        $email = sanitize_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format.";
        }
    }

    // Validate Message
    if (empty($_POST["message"])) {
        $messageErr = "Message is required.";
    } else {
        $message = sanitize_input($_POST["message"]);
        if (strlen($message) < 10) {
            $messageErr = "Message must be at least 10 characters long.";
        }
    }

    // Check if all validations passed
    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
        echo "<h2>Your Submitted Data:</h2>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Message: " . nl2br($message) . "<br>";
    } else {
        // Display errors
        echo "<h3>Errors:</h3>";
        echo $nameErr ? $nameErr . "<br>" : "";
        echo $emailErr ? $emailErr . "<br>" : "";
        echo $messageErr ? $messageErr . "<br>" : "";
        echo "<br><a href='validation_form.html'>Go back to form</a>";
    }
} else {
    echo "Form was not submitted correctly.";
}
?>
