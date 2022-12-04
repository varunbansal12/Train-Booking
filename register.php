<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="images/Vehicle.png" type="image/x-icon" />
  <link rel="stylesheet" href="styles.css" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Train Booking - Register</title>
</head>

<body>
  <div class="fixed">
    <a href="index.html">
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
      <h2>
        <span>Train Booking Register</span>
      </h2>
      <div id="main-two">
      <dl>
          <dt><strong>Train Booking.inc is...</strong></dt>
          <dd>
            <br />
             The brand new Train Booking works hard to serve all of your booking needs with a wide selection of affordable luxury rides.
            <br />
          </dd>

          <dt><strong>Why Train Booking?</strong></dt>
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
        <form action="register-database.php" method="post">
          <fieldset>
            <legend>Register</legend>
            <div>
              <label for="ID">ID: </label>
              <input type="text" name="ID" placeholder="Account"><br>
            </div>
            <div>
              <label for="password">Password: </label>
              <input type="password" name="pass" placeholder="Password"><br>
            </div>
            <div>
              <label for="pNumber">Phone: </label>
              <input type="tel" name="pNumber" placeholder="Phone Number"><br>
            </div>
            <input type="submit" value="Sign up">
          </fieldset>
        </form>
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