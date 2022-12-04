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
  <title>Train Booking - Main</title>
</head>

<body>
<?php
if (isset($_GET['reg']) && $_GET['reg'] == 1) {
  echo "<img src onerror='alert(`Registered Successfully!`)'>";
}
if (isset($_GET['log']) && $_GET['log'] == 0) {
  echo "<img src onerror='alert(`Please login first to proceed!`)'>";
}
if (isset($_GET['app']) && $_GET['app'] == 1) {
  echo "<img src onerror='alert(`Your appointment has been booked!`)'>";
}
?>

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
  echo "<a href = 'logout.php'>Logout</a><hr>";
// print_r($_SESSION);
}
?>
      <h2>
        <span>Welcome to Train Booking</span>
      </h2>
      <div id="main-two">
        <dl>
          <dt><strong>Train Booking.inc is...</strong></dt>
          <dd>
            <br />
            The brand new Train Booking works hard to serve all of your booking needs with a wide selection of affordable luxury ride.
            <br />
          </dd>

          <dt><strong>Why Train Bookingl?</strong></dt>
          <dd>
            <ul>
              <li>Great Customer Service</li>
              <li>Affordable Rates</li>
              <li>Same-Day Online Booking</li>
              <li>Friendly Staff</li>
              <li>Great Selection</li>
            </ul>
          </dd>
        </dl>
    <?php

if ((!isset($_SESSION['isloggedin']) || isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] != 1)) {

  echo '<form action="login.php" method="post">';
  echo '<fieldset>';
  echo ' <legend>Login Here</legend>';
  echo '  <div>';
  echo '    <label for="ID">ID: </label>';
  echo '    <input type="text" name="ID" placeholder="Account"><br>';
  echo '  </div>';
  echo ' <div>';
  echo '    <label for="password">Password: </label>';
  echo '    <input type="password" name="pass" placeholder="Password">';
  echo '  </div>';
  echo '  <input type="submit" value="Login">';
  echo ' <a href="register.php">';
  echo '    <input type="button" value="Register Now" style="margin-left: 15px;">';
  echo '  </a>';
  echo '</fieldset>';
  echo ' </form>';
}
?>
      </div>
     
    </div>
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
</body>

</html>