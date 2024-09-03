<?php
	$bid = "";
	$fid = "";
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		if(isset($_SESSION['bid'])) {
        $bid = $_SESSION['bid'];
    }
	if(isset($_SESSION['fid'])) {
        $fid = $_SESSION['fid'];
    }
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "../Login/profile.php";
		}
		else {
				$link = "../Login/profile.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "../index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
			<header id="header">
				<h1><a href="../index.php">KissanConnect</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<?php if($bid != "" && $fid == "") echo '<li><a href="../favorites.php"><span class="glyphicon glyphicon-shopping-cart"> Favourites</a></li>'?>
						<li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li>
						<li><a href="../market.php"><span class="glyphicon glyphicon-grain"> DigiMart</a></li>
						<?php if ($fid != "" && $bid == "") echo '<li><a href="../orders.php"><span class="glyphicon glyphicon-shopping-cart"></span> Orders</a></li>' ?>
					</ul>
				</nav>
			</header>

	</body>
</html>
