<?php

require_once 'connection.php';
$admin = $_POST['username'];
$password = $_POST['password'];

$query = "Select * from admin " . "where username = '$admin'" . " and " . "password='$password'";
$result = $conn->query($query);

if(!$result || $result->num_rows==0) {
    header('location:fourth.php');
} else {
    session_start();
    $_SESSION['isAdmin'] = 1;
    $_SESSION['ad'] = $admin;
    
    header('location:adminPortal.php');
}

?>