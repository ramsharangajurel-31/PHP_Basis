<?php
session_start();

// Session timeout (10 minutes)
$timeout = 600;

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Check session timeout
if (time() - $_SESSION['login_time'] > $timeout) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
<p>You are logged in.</p>

<a href="logout.php">Logout</a>

</body>
</html>
