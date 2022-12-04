<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" href="images/Vehicle.png" type="image/x-icon" />
  <link rel="stylesheet" href="styles.css" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PCTE Group Of Institution - school-success</title>

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
            <br>
            <h2> Admin Login </h2>
        <form action="adminLogin.php" method="post">
        <input type="text" name="username" placeholder="username"/>
        <input type="text" name="password" placeholder="password"/>
        <input type="submit" name="submit" value = "Submit"/>
        </form>
            <br>
        </div>
     </main>
</body>

</html>