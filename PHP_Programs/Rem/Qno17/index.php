<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD Application</title>
</head>
<body>

<h2>Add Student</h2>

<form method="post" action="insert.php">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    <input type="submit" name="submit" value="Add Student">
</form>

<hr>

<h2>Student Records</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Age</th>
    <th>Action</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM students");

while ($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['age'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
________________________________________
