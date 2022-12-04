<?php
require_once 'connection.php';

if (isset($_POST['ID']) && isset($_POST['pass']) && isset($_POST['pNumber'])) {
    $ID = $_POST['ID'];
    $pass = $_POST['pass'];
    $phone = $_POST['pNumber'];
    $sql_add_query = "INSERT INTO users VALUES('$ID','$pass','$phone')";
    if ($conn->query($sql_add_query) === FALSE) {
        die("Could not add the new user");
    }
    header('location:index.php?reg=1');
}