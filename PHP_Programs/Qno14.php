<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Age: <input type="number" name="age" required><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {

    // Secure data retrieval
    $name  = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $age   = (int)$_POST['age'];

    if ($age <= 0) {
        echo "Invalid age. Age must be a positive number.";
    } else {
        echo "<h3>Submitted Data:</h3>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Age: $age <br>";
    }
}
?>

</body>
</html>
