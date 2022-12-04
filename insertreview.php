<?php
require_once 'connection.php';
session_start();

$u = $_SESSION['userId'];
$vehicle = $_GET['vehicle'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $review = $_POST['review'];
}

if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == 1) {
        $sql_add_query = "INSERT INTO `reviews` ( `username`,`review`, `vehicle`) VALUES ( '$u','$review', '$vehicle')";
        if ($conn->query($sql_add_query) === FALSE)
                die("error");
        else {
                header('location:vehicles.php');
        }
}
else {
        header('location:index.php?log=0');
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
