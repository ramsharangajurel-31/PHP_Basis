<?php
// ================= SET COOKIE =================
// Cookie name, value, and expiry time (1 hour)
setcookie("user_name", "Paddhati", time() + 3600, "/");

// ================= RETRIEVE COOKIE =================
if (isset($_COOKIE["user_name"])) {
    echo "Cookie Value: " . $_COOKIE["user_name"] . "<br>";
} else {
    echo "Cookie is not set.<br>";
}

// ================= DELETE COOKIE =================
// To delete a cookie, set expiry time in the past
if (isset($_GET['delete'])) {
    setcookie("user_name", "", time() - 3600, "/");
    echo "Cookie deleted.";
}
?>

<br>
<a href="cookie_example.php?delete=true">Delete Cookie</a>
