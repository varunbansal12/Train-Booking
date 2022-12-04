<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="images/Vehicle.jpg" type="image/x-icon" />
  <link rel="stylesheet" href="styles.css" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Train Booking - Available Trains</title>
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
<h2>
  <span>Available Vehicles</span>
</h2>

      <div class="IMGS IMGS_AVs">
        <figure>
        <a href='detail_Honda.php'><img src="images/2022-honda-civic.jpg" alt="School photo" width="400" height="240" title="Our Delicious
            Campus Building" /></a>
          <figcaption><span>Manu Express</span></figcaption>
        </figure>
        <figure>
            <a href='detail_Ford.php'>  <img src="images/2022-ford-f150.jpg" alt="2022-ford-f150" width="400" height="240" title="2022-ford-f150" />
            </a> <figcaption><span>Muskaan express</span></figcaption>
        </figure>
      </div>
      <div class="IMGS IMGS_AVs">
        <figure>
        <a href='detail_BMW.php'>   <img src="images/2022-bmw-X5.jpg" alt="2022-bmw-X5" width="400" height="240" title="2022-bmw-X5" />
        </a> <figcaption><span>Vishu Express</span></figcaption>
        </figure>
        <figure>
          <a href='detail_benz.php'>   <img src="images/2022-benz-Eclass-coup.jpg" alt="2022-benz-Eclass-coup" width="400" height="240"
            title="2022-benz-Eclass-coup" />
          </a> <figcaption><span>Khush express</span></figcaption>
        </figure>
      </div>
      <br />
   <!-- <div> <h2> Want to put a car on rent ?</h2>
   <?php
// echo "" .
//   "<form  action='upload.php' method='POST' enctype='multipart/form-data'> "
//   . "  CAR Name 
//               <input type='text' name='name' value='name'><br>
//           CAR model


//               <input type='text' name='model' value='model'> <br>
//  CAR  Price          <input type='text' name='price' value='price'>             
// "
//   . "<br>"
//   . "Select image of the vehicle to upload: <input type= 'file' name='fileToUpload' id='fileToUpload'> "
//   . " "
//   . "<input type='submit' value='Submit' name = 'submit'> </form> ";
?> 
   
   </div> -->
      
  </main>
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
  <!-- <script>
    // date counting down to
    var countDownDate = new Date("June 8, 2022 09:00:00").getTime();

    // Update the count down
    var x = setInterval(function () {
      // today's date and time
      var now = new Date().getTime();
      // the distance between now and the count down date
      var distance = countDownDate - now;
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      // Output the result
      document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Apply for the next semester!";
      }
    }, 1000);
  </script> -->
</body>

</html>