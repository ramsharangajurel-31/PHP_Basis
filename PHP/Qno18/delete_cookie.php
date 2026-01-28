<?php
// Delete cookie by setting expiration in the past
setcookie("username", "", time() - 3600, "/");
echo "Cookie 'username' deleted.<br>";
echo "<a href='get_cookie.php'>Check Cookie</a>";
?>
