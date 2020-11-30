<?php
	session_start();
	require 'conn.php';
?>
<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['fname'];
		$logo = "glyphicon glyphicon-user";
			$link = "Login/profile.php";
				$link = "profileView.php";
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>myproducts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="C:\Users\rushi\Desktop\html projects\miniproject\mainpage.css">
  </head>
  <body>
		<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: green">
  <a class="navbar-brand" href="mainpage.php">Farmer Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="mainpage.php">Home <span class="sr-only">(current)</span></a></li>
      

        <li class="nav-item"><a class="nav-link active" href="myproducts.php">My Products</a></li>
        <li class="nav-item"><a class="nav-link" href="myorders.php">My Orders</a></li>
        <li class="nav-item"><a class="nav-link" href="myprofile.php">My Profile</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

</nav>

  <a href="addproducts.php"><button id="btn" class="btn btn-primary" type="submit" name="button">Add products</button></a>


  </body>
</html>
