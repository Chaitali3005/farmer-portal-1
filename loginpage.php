<?php
session_start();

require 'conn.php';
if (isset($_POST['button'])){
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $result = mysqli_query($mysqli,"SELECT * From register Where email = '$email' and pass = '$pass' ");
      $row = mysqli_fetch_array($result);
      if ($row['email'] == $email && $row['pass'] == $pass) {
         echo "success";
         $_SESSION['id'] = $row['ID'];
         $_SESSION['Password'] = $row['pass'];
         $_SESSION['Email'] = $row['email'];
         $_SESSION['fname'] = $row['fname'];
         $_SESSION['lname'] = $row['lname'];
         $_SESSION['Mobile'] = $row['phone'];
         $_SESSION['gender'] = $row['gender'];
         $_SESSION['picStatus'] = $row['picstatus'];
         $_SESSION['picExt'] = $row['picExt'];
         $_SESSION['logged_in'] = true;
         if($_SESSION['picStatus'] == 0)
    {
        $_SESSION['picId'] = 0;
        $_SESSION['picName'] = "profile0.png";
    }
    else
    {
        $_SESSION['picId'] = $_SESSION['id'];
        $_SESSION['picName'] = "profile".$_SESSION['picId'].".".$_SESSION['picExt'];
    }
    //echo $_SESSION['Email']."  ".$_SESSION['Name'];

    // header("location: profile.php");
      }
      else {
        echo "invalid credentials";
      }
    }
    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="loginpage.css">
  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: green">
  <a class="navbar-brand" href="mainpage.php">Farmer Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link active" href="mainpage.php">Home <span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="myproducts.php">My Products</a></li>
        <li class="nav-item"><a class="nav-link" href="myorders.php">My Orders</a></li>

        <li class="nav-item"><a class="nav-link" href="myprofile.php">My Profile</a></li>
    </ul>
  </div>

</nav>
    <div class="wrapper" id="">
      <h1>Farmer Portal</h1>
      <form class="" action="loginpage.php" method="post">
        <input class="textbox" type="email" name="email" value="" placeholder="email" required>
        <input class="textbox" type="password" name="pass" value="" placeholder="password" required>
        <button id="btn" class="btn" type="submit" name="button">Log In</button>

      </form>

        <a href="forgotpass.html">
          <p class="forgot">Forgot Password</p>
        </a>
    </div>

    <div class="wrapper2">
      <p id="signup">Don't Have an Account? <a href="signup.php" class="signup">Sign up</a></p>
    </div>

  </body>
</html>
