
<?php
if(isset($_COOKIE['username'])) {
    echo "Welcome back, " . $_COOKIE['username'] . "!<br>";
} else {
    echo "Cookie 'username' is not set.<br>";
}

echo "<a href='delete_cookie.php'>Delete Cookie</a>";
?>
