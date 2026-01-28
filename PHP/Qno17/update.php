<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    $stmt = $conn->prepare("UPDATE users SET name=?, email=? WHERE id=?");
    $stmt->bind_param("ssi", $name, $email, $id);
    $stmt->execute();
    $stmt->close();

    header("Location: read.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="POST" action="">
        Name: <input type="text" name="name" value="<?php echo $user['name']; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br><br>
        <input type="submit" value="Update User">
    </form>
    <br>
    <a href="read.php">Back to Users</a>
</body>
</html>
