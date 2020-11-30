<?php
	session_start();
	require 'conn.php';
	$pid = $_GET['pid'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>AgroCulture: Product</title>
	<meta lang="eng">
	<meta charset="UTF-8">
		<title>AgroCulture</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="Blog/commentBox.css" />
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
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
			<li class="nav-item"><a class="nav-link" href="addproducts.php">My Products</a></li>
			<li class="nav-item"><a class="nav-link" href="myorders.php">My Orders</a></li>

			<li class="nav-item"><a class="nav-link" href="myprofile.php">My Profile</a></li>
	</ul>
	<form class="form-inline my-2 my-lg-0">
	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
	</form>
</div>

</nav>


				<?php
					// require 'menu.php';

					$sql="SELECT * FROM fproduct WHERE pid = '$pid'";
					$result = mysqli_query($mysqli, $sql);
					$row = mysqli_fetch_assoc($result);

					$fid = $row['fid'];
					$sql = "SELECT * FROM register WHERE ID = '$fid'";
					$result = mysqli_query($mysqli, $sql);
					$frow = mysqli_fetch_assoc($result);

					$picDestination = "images/productImages/".$row['pimage'];

					?>
				<section id="main" class="">
						<div class="container">
							<div class="row">
								<div class="col-sm-4">
									<img class="image fit" src="<?php echo $picDestination.'';?>" alt="" height="220px" width="220px"/>
								</div><!-- Image of farmer-->
								<div class="col-12 col-sm-6">
									<p style="font: 100px ;"><?= $row['product']; ?></p>
									<p style="font: 100px ;">Product Owner : <?= $frow['fname']; ?></p>
									<p style="font: 100px ;">Price : <?= $row['price'].' /-'; ?></p>
								</div>
							</div><br />
							<div class="row">
								<div class="col-12 col-sm-12" style="font: 25px Times new roman;">
									<?= $row['pinfo']; ?>
								</div>
							</div>
						</div>

						<br /><br />

						<div class="12u$">
                            <center>
                                <div class="row uniform">
                                    <div class="6u 12u$(large)">
                                        <a href="myorders.php?flag=1&pid=<?= $pid; ?>" class="btn btn-primary" style="text-decoration: none;"><span class="glyphicon glyphicon-shopping-cart"> AddToCart</a>
                                    </div>
                                    <div class="6u 12u$(large)">
                                        <a href="buyNow.php?pid=<?= $pid; ?>" class="btn btn-primary" style="text-decoration: none;">Buy Now</a>
                                    </div>
                                </div>
                            </center>
                        </div>

					<div class="container">
						<h1>Product Reviews</h1>
					<div class="row">
						<?php
							$sql = "SELECT * FROM review WHERE pid='$pid'";
							$result = mysqli_query($mysqli, $sql);
						?>
						<div class="col-0 col-sm-3"></div>
						<div class="col-12 col-sm-6">
							<?php
								if($result) :
									while($row1 = $result->fetch_array()) :
							?>
							<div class="con">
								<div class="row">
									<div class="col-sm-4">
										<em style="color: black;"><?= $row1['comment']; ?></em>
									</div>
									<div class="col-sm-4">
										<em style="color: black;"><?php echo "Rating : ".$row1['rating'].' out of 10';?></em>
									</div>
								</div>
								<span class="time-right" style="color: black;"><?php echo "From: ".$row1['name']; ?></span>
								<br /><br />
							</div>
						<?php endwhile; endif;?>
					</div>
				</div>
			</div>
			<?php

			?>
			<div class="container">
				<p style="font: 20px Times new roman; align: left;">Rate this product</p>
				<form method="POST" action="reviewInput.php?pid=<?= $pid; ?>">
					<div class="row">
						<div class="col-sm-7">
							<textarea style="background-color:white;color: black;" cols="5" name="comment" placeholder="Write a review"></textarea>
						</div>
						<div class="col-sm-5">
							<br />
							Rating: <input type="number" min="0" max="10" name="rating" value="0"/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<br />
							<input type="submit" />
						</div>
					</div>
				</form>
			</div>


	</body>
	</html>
