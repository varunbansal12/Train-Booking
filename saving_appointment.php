<?php
require_once 'connection.php';
session_start();
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == 1) {
    // echo "<h3>Welcome $user !</h3>";
    // echo "<a href = 'logout.php'>Logout</a>";
    // print_r($_SESSION);
   // print_r($_POST);
    // print_r($_GET);



    $vehicle = $_GET['vehicle'];
    $ID = $_SESSION['userId'];
    $phone = $_SESSION['PhoneNumber'];
    $numOfPass = $_POST['weeks'];
    // $start = $_POST['startDate'];
    // $start = strtotime($_POST['startDate']);
    $start = date('Y-m-d', strtotime($_POST['startDate']));
    echo "<br>";
   // echo $start;
    // echo gettype($_POST['startDate']);
    // echo gettype($start);
    // echo gettype(2022 - 04 - 25);
    echo "<br>";

    $query = "SELECT * FROM vehicles WHERE vehicle_code='$vehicle'";
    $result = $conn->query($query);
    $fetched_row = $result->fetch_assoc();
    $total = $fetched_row['price_per_week'] * $numOfPass;
    $select = mysqli_query($conn, "SELECT * FROM appointments WHERE startDate = '$start'");
    $fetched_row1 = $select->fetch_assoc();
        $query2 = "INSERT INTO appointments VALUES(0,'$vehicle','$ID', '$start', $total, $numOfPass)";

        if ($conn->query($query2) === FALSE) {
            die("Could not save an appointment");
        }
        else {
            header('location:index.php?app=1');
        }
    
}
else {
    header('location:index.php?log=0');
}

?>