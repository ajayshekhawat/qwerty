<?php
SESSION_START();
$a = $_SESSION['name'];
session_destroy();
SESSION_START();
$_SESSION['end'] = 0;
$_SESSION['name'] = 0;
$_SESSION['uid'] = 0;
header("location:index.php");

?>
