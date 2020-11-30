<?php
    session_start();

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != 1)
	{
		$_SESSION['message'] = "You have to Login to view this page!";
		header("Location: Login/error.php");
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>myprofile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="C:\Users\rushi\Desktop\html projects\miniproject\mainpage.css">
    <style media="screen">
    #btn{
      width: 102%;
      padding: 10px 4px;
      margin-top: 3%;
      border-radius: 5px;
      background-color: #C4E0FB;
      color: #fff;
    }

    .wrapper4{
      background-color: #fff;
      width:22%;
      margin: 1% auto;
      padding: 1rem 3rem;
    }
    </style>
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
        <!-- <li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li> -->

        <li class="nav-item"><a class="nav-link" href="addproducts.php">My Products</a></li>
        <li class="nav-item"><a class="nav-link" href="myorders.php">My Orders</a></li>
        <li class="nav-item"><a class="nav-link active" href="myprofile.php">My Profile</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

</nav>


<?php
            // require 'menu.php';
        ?>

        <section id="one" class="wrapper style1 align">
            <div class="inner">
                <div class="box">
                <header>
                    <center>
                    <span><img src="<?php echo 'images/profileImages/'.$_SESSION['picName'].'?'.mt_rand(); ?>" class="image-circle" class="img-responsive" height="200%"></span>
                    <br>
                    <h2><?php echo $_SESSION['fname'];?></h2>
                    <h4 style="color: black;"><?php echo $_SESSION['Email'];?></h4>
                    <br>
                </center>
                </header>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <!-- <div class="col-sm-3">
                            <b><font size="+1" color="black">RATINGS : </font></b>
                            <font size="+1"><?php echo $_SESSION['Rating'];?></font>
                        </div> -->
                        <div class="col-sm-3">
                            <b><font size="+1" color="black">Email ID : </font></b>
                            <font size="+1"><?php echo $_SESSION['Email'];?></font>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3">
                            <b><font size="+1" color="black">Mobile No : </font></b>
                            <font size="+1"><?php echo $_SESSION['Mobile'];?></font>
                        </div>
                        <!-- <div class="col-sm-3">
                            <b><font size="+1" color="black">ADDRESS : </font></b>
                            <font size="+1"><?php echo $_SESSION['Addr'];?></font>
                        </div> -->
                        <div class="col-sm-3"></div>
                    </div>
                        <div class="12u$">
                            <center>
                                <div class="wrapper4">
                                        <a href="changePassPage.php" id="btn" class="btn btn-primary" style="text-decoration: none;">Change Password</a>
                                        <a href="profileEdit.php" id="btn" class="btn btn-primary" style="text-decoration: none;">Edit Profile</a>
            							<a href="uploadProduct.php" id="btn" class="btn btn-primary" style="text-decoration: none;">Upload Product</a>
                                        <a href="Login/logout.php" id="btn" class="btn btn-primary" style="text-decoration: none;">LOG OUT</a>

                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>


  </body>
</html>
