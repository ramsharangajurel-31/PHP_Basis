<?php
// Delete cookie by setting past time
setcookie("username", "", time() - 3600);

echo "Cookie has been deleted.";
?>
