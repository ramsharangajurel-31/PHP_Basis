<?php
include 'db.php';

$id    = $_POST['id'];
$name  = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$age   = htmlspecialchars($_POST['age']);

$conn->query("UPDATE students SET name='$name', email='$email', age='$age' WHERE id=$id");
header("Location: index.php");
?>
