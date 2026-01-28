<?php
include 'db.php';

if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['age'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("UPDATE students SET name=?, email=?, age=? WHERE id=?");
    $stmt->bind_param("ssii", $name, $email, $age, $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: index.php");
?>
