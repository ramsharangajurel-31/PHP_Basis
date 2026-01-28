include "db.php";

$result = mysqli_query($conn, "SELECT * FROM students");

echo "<h2>Student List</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Course</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['course']}</td>
          </tr>";
}
echo "</table>";
?>
=======
<?php
include "db.php";

$result = $conn->query("SELECT * FROM feedback");
?>

<h2>Feedback List</h2>

<table border="1" cellpadding="10">
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
</tr>

<?php while ($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['message'] ?></td>
</tr>
<?php } ?>
</table>
