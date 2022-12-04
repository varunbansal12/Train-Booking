<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="images/Vehicle.png" type="image/x-icon" />
  <link rel="stylesheet" href="styles.css" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
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
  echo "<h3>Welcome $user !</h3>";
  echo "<a href = 'logout.php'>Logout</a>";
// print_r($_SESSION);
}
else {
  echo "<br><a href = 'index.php'><span>Please Log in</span></a>";
}
?>
<hr>

      <h3>Khush Express</h3>
      <div id="horizontal-two-items" class="IMGS IMGS_AVs">
        
        <div>
          <h3 style="margin-left:40px"></h3>
          <p>The Khush Express is a night express train service operating between Chennai Central and Mettupalayam, Coimbatore in Tamil Nadu, India. It is operated by Indian Railways.</p>
          <br>
          <p>Current Rate: <b>500.00 </b></p>
        </div>
      </div>
      <hr>
      <form action="saving_appointment.php?vehicle=Khush Express" method="POST" style="width:350px; padding:5px;margin:15px;margin-top:20px;">
        <fieldset>
          <legend>Book your train:</legend>
          <label for="startDate">Start Date: </label>
          <input type="hidden" value="BMW">
          <input type="date"  name="startDate" value="2022-11-30"><br><br>
          <label for="weeks">Choose number of passengers:</label>
          <select id="weeks" name="weeks">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select><br><br>
          <input type="submit">
        </fieldset>
      </form>
          <?php
           

        
$query = "Select * from reviews where vehicle = 'benz'";
$result = $conn->query($query);
echo '<h3 style=" margin-left:520px; margin-top: -150px;"> REVIEWS...</h3>' . '<div  style="overflow:scroll;margin-left:500px; margin-top: -40px;height:120px; width:350px;">' . '<ol>';
  while($row = $result->fetch_assoc()) {
  echo'<li>'.'<b>'.$row['username'].'</b>'.'<br>'  . $row['review'].'</li>'.'<br>';
}
echo'</ol>'.'</div>';
  echo'<form  action="insertreview.php?vehicle=benz" method="POST">';
  echo'<h3>'.'<label for="review">ADD A REVIEW: </label>'.'</h3>';
  echo'<input type="text" name="review" placeholder="review" style=" height: 40px; width:280px; ">';
  echo'<input type="submit">';   
  echo'</form>';

?>
    </div>
  </main>


    <!-- then it will go to summary page for the order with price and everything-->
    <!-- check if the car is available or not 
    by checking if a data with the car name is exist in the database -->
    <!-- add them into database -->
    <!-- otherwise, raise an error -->
    
    <!-- at the third page, it shows all the transactions the user made -->


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