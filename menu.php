<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "Login/profile.php";
		}
		else {
				$link = "profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>
<!DOCTYPE html>
			<header id="header">
				<h1><a href="index.php">AgroCulture</a></h1>
				<nav id="nav">
					<ul>
						<li class="nav-item"><a class="nav-link" href="mainpage.php">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li>
						<li class="nav-item"><a class="nav-link" href="myproducts.html">My Products</a></li>
		        <li class="nav-item"><a class="nav-link active" href="myorders.html">My Orders</a></li>
		        <li class="nav-item"><a class="nav-link" href="myprofile.html">My Profile</a></li>
					</ul>
				</nav>
			</header>

	</body>
</html>
