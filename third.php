<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="images/Vehicle.png" type="image/x-icon" />
  <link rel="stylesheet" href="styles.css" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Train Booking</title>
</head>

<body>
  <div class="fixed">
    <a href="index.php">
      <h1>Train Booking</h1>
    </a>
    <nav>
      <ul>
	<li><a href="index.php"> Home</a></li>
        <li><a href="Vehicles.php"> Vehicles</a></li>
        <li><a href="third.php"> Your Rentals</a></li>
        <li><a href="fourth.php"> Admin Portal</a></li>
      </ul>
    </nav>
  </div>
  <main>
    <div id="wrapper">
        
        
<?php
require_once 'connection.php';
session_start();
if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == 1) {
  $user = $_SESSION['userId'];
  $query = "SELECT * FROM appointments WHERE ID='$user'";
  $result = $conn->query($query);
  $r = $result->num_rows;
        
  echo "<h3>Welcome $user!</h3>";
  echo "<a href = 'logout.php'>Logout</a>";
  echo "<br>";

}
else {
  header('location:index.php?log=0');

}
?>
    <hr><br>
    <center>
      <h2>
        <span id="maps"> <?php echo "$user's Rentals"; ?></span>
      </h2>
      
       <br /><br />  
        

                    
    <table border = "5"  bgcolor="grey" style="color:white; font-size:26px; justify:15px; ">
    <?php
    if(mysqli_num_rows($result) == 0) {
        echo "No Rentals Yet!";
    } else {
    echo "<tr bgcolor=\"#007488\">"
            . "<td style=\"text-align: center;\"><b>&nbsp Vehicle &nbsp</b></td>"
            . "<td style=\"text-align: center;\"><b>&nbsp No. of Passengers &nbsp</b></td>"
            . "<td style=\"text-align: center;\"><b>&nbsp Pick Up Date &nbsp</b></td>"
            . "<td style=\"text-align: center;\"><b>&nbsp Total &nbsp</b></td>"
        . "</tr>";    
        for ($j = 0; $j < $r; $j++) {
            $fetched_row = $result->fetch_assoc();
            $a = $fetched_row['vehicle_code'];
            $b = $fetched_row['no_passenger'];
            $c = $fetched_row['total_price'];
            $d = $fetched_row['startDate'];
            
            echo "<tr>"
                    . "<td style=\"text-align: right;\">&nbsp $a &nbsp</td>"
                    . "<td style=\"text-align: center;\"> $b </td>"
                    . "<td style=\"text-align: center;\"> $d </td>"
                    . "<td style=\"text-align: center;\"> $c </td>"
            . "</tr>";
        }
    }       
    ?>
    </table>

          
          <br /><br />
          <h3>We'll see you on your pickup date!<br></h3>
          <h4>* Train Booking *<br>* 13248975 AAA Road *<br>* Abbotsford, BC V2S 000 *<br><br><br> Call us with any questions at <b>111-222-3333</b></h4>
          <br /><br />
          <hr>
        </dd>
      </dl>
    </div>
  </main>
  </center>  
  <div id="address">
    <p>
      Train Booking<br />13248975 AAA Road<br />Abbotsford, BC
      V2S 000<br /><br />111-222-3333
    </p>
  </div>

  <p class="copyright">
    <i><small>Copyright &copy; 2022 CIS245 Project team<br />
        CIS245@UFV.ca</small></i>
  </p>
  <p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
      <img style="
            border: 0;
            width: 88px;
            height: 31px;
            position: fixed;
            bottom: 2%;
            right: 2%;
          " src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
    </a>
  </p>
</body>

</html>