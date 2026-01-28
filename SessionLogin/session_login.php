<?php
session_start();

// ================= SECURITY SETTINGS =================
$session_timeout = 60 * 5; // 5 minutes

// Check session timeout
if (isset($_SESSION['last_activity'])) {
    if (time() - $_SESSION['last_activity'] > $session_timeout) {
        session_unset();
        session_destroy();
        header("Location: session_login.php?timeout=true");
        exit();
    }
}
$_SESSION['last_activity'] = time();

// ================= LOGIN CREDENTIALS (DEMO) =================
// In real applications, fetch these from database
$valid_username = "admin";
$valid_password = "admin123";

// ================= LOGIN LOGIC =================
$error = "";

if (isset($_POST['login'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if ($username === $valid_username && $password === $valid_password) {
        session_regenerate_id(true); // Prevent session fixation
        $_SESSION['username'] = $username;
        $_SESSION['logged_in'] = true;
    } else {
        $error = "Invalid username or password";
    }
}

// ================= LOGOUT =================
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: session_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Login System</title>
    <style>
        body { font-family: Arial; }
        .box { width: 300px; margin: 100px auto; border: 1px solid #000; padding: 20px; }
    </style>
</head>
<body>

<div class="box">
<?php if (isset($_SESSION['logged_in'])) { ?>

    <h3>Welcome, <?php echo $_SESSION['username']; ?></h3>
    <p>You are successfully logged in.</p>
    <a href="session_login.php?logout=true">Logout</a>

<?php } else { ?>

    <h3>Login</h3>

    <?php
    if (isset($_GET['timeout'])) {
        echo "<p style='color:red;'>Session expired. Please login again.</p>";
    }
    if ($error) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>

    <form method="post">
        Username:<br>
        <input type="text" name="username" required><br><br>

        Password:<br>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="login">Login</button>
    </form>

<?php } ?>
</div>

</body>
</html>

