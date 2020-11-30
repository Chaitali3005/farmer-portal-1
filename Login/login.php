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
         $_SESSION['id'] = $row['id'];
         $_SESSION['Password'] = $row['pass'];
         $_SESSION['Email'] = $row['email'];
         $_SESSION['fname'] = $User['fname'];
         $_SESSION['lname'] = $User['lname'];
         $_SESSION['Mobile'] = $User['phone'];
         $_SESSION['gender'] = $User['gender'];
         $_SESSION['picStatus'] = $User['picStatus'];
    $_SESSION['picExt'] = $User['picExt'];
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

    header("location: profile.php");
      }
      else {
        echo "invalid credentials";
      }
    }
    ?>
