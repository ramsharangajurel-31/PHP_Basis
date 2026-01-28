<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Information System</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; padding: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #4CAF50; color: white; }
        input[type=text], input[type=number], input[type=email] {
            padding: 5px; width: 200px; margin: 5px;
        }
        input[type=submit] {
            padding: 5px 10px; background-color: #4CAF50; color: white; border: none; cursor: pointer;
        }
        input[type=submit]:hover { background-color: #45a049; }
    </style>
    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this student?")) {
                window.location = "delete.php?id=" + id;
            }
        }
    </script>
</head>
<body>

<h2>Student Information System</h2>

<h3>Add New Student</h3>
<form method="post" action="insert.php">
    Name: <input type="text" name="name" required>
    Email: <input type="email" name="email" required>
    Age: <input type="number" name="age" required>
    <input type="submit" value="Add Student">
</form>

<h3>Student Records</h3>
<table>
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Age</th><th>Action</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM students");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['age']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> |
                    <a href='#' onclick='confirmDelete({$row['id']})'>Delete</a>
                </td>
              </tr>";
    }
    ?>
</table>

</body>
</html>
