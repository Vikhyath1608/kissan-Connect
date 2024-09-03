<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "../farm/Login/profile.php";
		}
		else {
				$link = "../farm/profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "../farm/index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
			<header id="header">
				<h1><a href="index.php">FarmEasy</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="../farm/index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="../farm/favorites.php"><span class="glyphicon glyphicon-shopping-cart"> Favourites</a></li>
						<li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li>
						<li><a href="../farm/market.php"><span class="glyphicon glyphicon-grain"> DigiMart</a></li>
					</ul>
				</nav>
			</header>

	</body>
</html>
