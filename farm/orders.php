<?php
session_start();
require 'db.php';
$fid = "";
$data1 = "";
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1)
	{
		if(isset($_SESSION['fid'])) {
        $fid = $_SESSION['fid'];
    }
    $data = "SELECT * from farmer f, fproduct fp, transaction t where f.fid = fp.fid and fp.pid = t.pid and f.fid = $fid";
    $result = mysqli_query($conn, $data);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
		<title>KissanConnect: My Cart</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
</head>
<body>
    <?php
			require 'menu.php';
		?>

        <table>
            <tr>
            <th>Buyer Name</th>
            <th>Product</th>
            <th>Price</th>
            <th>Mobile</th>
            <th>Address</th>
        </tr>
        <?php while($data1 = $result->fetch_array()): ?> 
                    <tr>
                        <td><?php echo $data1['name']; ?></td>
                        <td><?php echo $data1['product']; ?></td>
                        <td><?php echo $data1['price']; ?></td>
                        <td><?php echo $data1['mobile']; ?></td>
                        <td><?php echo $data1['addr']; ?></td>
                    </tr>
        <?php endwhile; ?>
        </table>
</body>
</html>