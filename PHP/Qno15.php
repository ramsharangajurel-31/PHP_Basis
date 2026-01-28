<!DOCTYPE html>
<html>
<head>
    <title>Server Side Validation</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="post" action="Qno15.php">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Age: <input type="number" name="age"><br><br>

    <input type="submit" name="submit" value="Register">
</form>

<?php
if (isset($_POST['submit'])) {

    $errors = [];

    // Required field validation
    if (empty($_POST['name'])) {
        $errors[] = "Name is required";
    }

    if (empty($_POST['email'])) {
        $errors[] = "Email is required";
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($_POST['age'])) {
        $errors[] = "Age is required";
    } elseif (!is_numeric($_POST['age']) || $_POST['age'] <= 0) {
        $errors[] = "Age must be a valid number";
    }

    // Display result
    if (empty($errors)) {
        echo "Form submitted successfully<br>";
        echo "Name: " . htmlspecialchars($_POST['name']) . "<br>";
        echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";
        echo "Age: " . htmlspecialchars($_POST['age']);
    } else {
        echo "<b>Errors:</b><br>";
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>

</body>
</html>
