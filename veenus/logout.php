<?php
session_start();
session_unset();
session_destroy();
header("Location: home.php");
exit();
?>
<html>
    <head>
        <title>Logout</title>
        <link rel="icon" type="image/x-icon" href="/veenus/logo.ico">
    </head>
</html>