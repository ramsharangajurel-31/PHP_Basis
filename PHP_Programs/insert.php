<?php
include 'db.php';

$name  = $_POST['name'];
$email = $_POST['email'];
$age   = $_POST['age'];

$sql = "INSERT INTO students (name, email, age)
        VALUES ('$name', '$email', '$age')";

$conn->query($sql);

header("Location: index.php");
?>
