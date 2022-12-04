<?php
require_once 'connection.php';
$u = $_POST['ID'];
$p = $_POST['pass'];

$query = "Select * from users where ID = '$u' and pass = '$p'";
$result = $conn->query($query);
if (!$result || $result->num_rows == 0) {
    header('location:index.php');
}
else {
    session_start();
    $fetched_row = $result->fetch_assoc();
    $_SESSION['isloggedin'] = 1;
    $_SESSION['userId'] = $u;
    $_SESSION['PhoneNumber'] = $fetched_row['Phone_Number'];
    header('location:Vehicles.php');
}