<?php
session_start();

// Session timeout: 5 minutes (300 seconds)
$timeout_duration = 300;

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Check for inactivity
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
    session_unset();
    session_destroy();
    echo "Session timed out due to inactivity.<br>";
    echo "<a href='login.php'>Login again</a>";
    exit;
}

// Update last activity time
$_SESSION['last_activity'] = time();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p>This is your secure dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
