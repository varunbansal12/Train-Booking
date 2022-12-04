<?php
require_once 'connection.php';
$s_d= $_GET['i'];
$query= "Delete FROM appointments where (`startDate)='$s_d'" ;
$conn->query($query);
header('location:third.php');        

/* 
 * 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

?>