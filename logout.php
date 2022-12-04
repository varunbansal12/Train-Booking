<?php
session_start();
$_SESSION['isloggedin'] = 0;
$_SESSION['isAdmin'] = 0;
session_destroy();
header('location:index.php')
?>