<?php
include 'db.php';

$name  = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$age   = htmlspecialchars($_POST['age']);

$sql = "INSERT INTO students (name, email, age) VALUES ('$name', '$email', '$age')";
$conn->query($sql);

header("Location: index.php");
?>
