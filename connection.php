<?php
$servername = "localhost";
$database = "Train Booking";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password, $database);
if ($conn->errno) {
    die("error " . $conn->errno);
}
?>
