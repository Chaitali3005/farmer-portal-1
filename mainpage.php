<?php
	session_start();
	require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Farmer Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="C:\Users\rushi\Desktop\html projects\miniproject\mainpage.css">
    <style media="screen">
    img{
      margin-left: 20px
    }
    #containers{
      margin-top: 10px;
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
<!-- <div id="containers" class="container">
  <div class="row">
    <div id="rows" class="col-sm">
      <p >boat rockerz 510:</p>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRi3kZ99vijYUEkrtzcMsOeSLvffUCnR99rcBKIV-1tL7kdDpfeRevasWueo9CS1HyBIqEZnigr&usqp=CAc" alt="">
      <p>Price:2499 inr</p>
    </div>
    <div id="rows" class="col-sm">
      <p>boat rockerz 450:</p>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQUlIg-NN6cHSBYCaStHRGb_hqNnBsg1EICxCNAUTCCbK9uy1NN0ejf47YESs-goPBR9IsWOGk&usqp=CAc" alt="">
      <p>Price:1499 inr</p>
    </div>
    <div id="rows" class="col-sm">
      <p>boat rockerz 255f:</p>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcROK8rKw4yf4f7A-3BPYSqhsLFC_igmmrXdvcTnvlhcRmmtL5173UYs7kotc_qO2_4HlbumFzk&usqp=CAc" alt="">
      <p>Price:1299 inr</p>
    </div>
    <div id="rows" class="col-sm">
      <p>infinity(JBL) Glide 500:</p>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQzMFoHD591_AUBFjrudWKgxPTrr54pDwAorQme8jwSEJMcbzr1vAP5RwPUYLHiDK4QEKrNZdFV&usqp=CAc" alt="">
      <p>Price:1499 inr</p>
    </div>
    <div id="rows" class="col-sm">
      <p>Sony MDR:</p>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ8kYP6ZvZynQZdF4UMDDyMl0tZdfq4xzYFYGObxPioul-GK7GS-LbYizhcuDtMiZYI7YyyF-w&usqp=CAc" alt="">
      <p>Price:2199 inr</p>
    </div>
    <div id="rows" class="col-sm">
      <p>Boat Rockerz 400:</p>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQJ6gwcr-0MwDIVLnwYWeVf1pGYxFgg9EZ5I9kyqNWpVeNmbcxz9yYr7UkYNIPaQoytFpXxY9Bx&usqp=CAc" alt="">
      <p>Price:1499 inr</p>
    </div>
    <div id="rows" class="col-sm">
      <p>JBL E55BT:</p>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRFNbQMqBCBCOx-GmhtxbDINTunGV2LZQ_ULyg3pjcNiW__xXEOv0n-EZOjP3Rx4V4cfT0ULs1t&usqp=CAc" alt="">
      <p>Price:5889 inr</p>
    </div>
    <div id="rows" class="col-sm">
      <p>Boat Airdopes 281:</p>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQbZEEO677Kap_sWnkIN-fGQvSmqFkjT2o_9UF_RBTAkfWRYD-uPVN0Z7BQcEA8wPz9R_Gl7mJ7&usqp=CAc" alt="" width="210" height="210">
      <p>Price:2299 inr</p>
    </div>
    <div id="rows" class="col-sm">
      <p>Boat airdopes 201:</p>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTsG0p7dhQye3xZRdODdMrgtOfPsgIjop3RolavO6rPbhOtfuY2Fsc0wG-ipuo8nwL1j0SNpgdV&usqp=CAc" alt="" width="210" height="210">
      <p>Price:1899 inr</p>
    </div>
    <div id="rows" class="col-sm">
      <p>Mi Super Bass:</p>
      <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQqb3ftr1tNmF4EVx5WvLxgEZ8uHhRPTCv9q_TmygjUNsUkeheihMHh8yVoAjcjWUeqSES0HSL9rdKg1GI4JI7DenSDL2W6ITT8zmHuao6g3qU-WcL_Dp7g3Q&usqp=CAE" alt="" width="210" height="210">
      <p>Price:1799 inr</p>
    </div>
    <div id="rows" class="col-sm">
      <p>Mivi Duopods:</p>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRy_D8pzXm72h4BGPJqSFxoNvkEgced74pAm_xbruohFpFiwWfkY6pEQigTsmnyPsx9eHViKHk&usqp=CAc" alt="" width="210" height="210">
      <p>Price:2499 inr</p>
    </div>
    <div id="rows" class="col-sm">
      <p>Mivi Thunder Beats:</p>
      <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQWzSRFFOdknw2-5IfiTqXImosiatqIM5eZq0UnH0-4ilDP3Pc3qNcwzsNgYFjEid13o2wOcN7TRC0ma62WtQp6CXZpbLqsEe7HItPmy9J8vidXdZZKIKrF&usqp=CAE" alt="" width="210" height="210">
      <p>Price:1399 inr</p>
    </div>
    </div> -->
    <?php
			// require 'menu.php';
			// function dataFilter($data)
			// {
			// 	$data = trim($data);
			// 	$data = stripslashes($data);
			// 	$data = htmlspecialchars($data);
			// 	return $data;
			// }
		?>

		<!-- One -->
			<section id="main" class="wrapper style1 align-center" >
				<div class="container">
						<!-- <h2>Welcome to digital market</h2> -->

				<?php
					if(isset($_GET['n']) AND $_GET['n'] == 1):
				?>
					<h3>Select Filter</h3>
					<form method="GET" action="productMenu.php?">
						<input type="text" value="1" name="n" style="display: none;"/>
						<center>
							<div class="row">
							<div class="col-sm-4"></div>
							<div class="col-sm-2">
								<div class="select-wrapper" style="width: auto" >
									<select name="type" id="type" required style="background-color:white;color: black;">
										<option value="all" style="color: black;">List All</option>
										<option value="fruit" style="color: black;">Fruit</option>
										<option value="vegetable" style="color: black;">Vegetable</option>
										<option value="grain" style="color: black;">Grains</option>
									</select>
							  	</div>
							</div>
							<div class="col-sm-2">
								<input class="button special" type="submit" value="Go!" />
							</div>
							<div class="col-sm-4"></div>
						</div>
						</center>
					</form>
				<?php endif; ?>

				<section id="two" class="wrapper style2 align-center">
				<div class="container">
				<?php
					if(!isset($_GET['type']) OR $_GET['type'] == "all")
					{
					 	$sql = "SELECT * FROM fproduct WHERE 1";
					}
				    if(isset($_GET['type']) AND $_GET['type'] == "fruit")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Fruit'";
					}
					if(isset($_GET['type']) AND $_GET['type'] == "vegetable")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Vegetable'";
					}
					if(isset($_GET['type']) AND $_GET['type'] == "grain")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Grains'";
					}
					$result = mysqli_query($mysqli, $sql);

					?>
					<div class="row">
					<?php

						while($row = $result->fetch_array()):
							$picDestination = "images/productImages/".$row['pimage'];
						?>
							<div class="col-md-4">
							<section>
							<strong><h2 class="title" style="color:black; "><?php echo $row['product'].'';?></h2></strong>
							<a href="review.php?pid=<?php echo $row['pid'] ;?>" > <img class="image fit" src="<?php echo $picDestination;?>" height="220px;" width="220px" /></a>

							<div style="align: left">
							<blockquote><?php echo "Type : ".$row['pcat'].'';?><br><?php echo "Price : ".$row['price'].' /-';?><br></blockquote>

						</section>
						</div>

						<?php endwhile;	?>


					</div>

			</section>
					</header>

			</section>
  </body>
</html>
