<?php
// Set a cookie named "username" valid for 1 hour
setcookie("username", "Ramsharan", time() + 3600, "/"); // "/" = available site-wide

echo "Cookie 'username' has been set.<br>";
echo "<a href='get_cookie.php'>Go to Get Cookie</a>";
?>
