<?php include_once "admin/connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Skiing Accessories Shop</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<style type="text/css">
		#a2{
			color: #0cdf70;
			text-decoration: underline;
		}
	</style>
</head>
<body>
<div class="header">
	<div class="nav">
		<ul>
			<li><a href="index.php" id="a1">Home Page</a></li>
			<li><a href="product.php" id="a2">Products</a></li>
		</ul>
	</div>
	<div class="logo_div">
		<img src="images/logo.png">
		<p>Ideal weather, superb clothing</p>
	</div>
</div>


<div class="single_div">
	 <a href="index.php">Home</a> <span> /</span> 
	 <a href="product.php">Products</a> <span> / </span> 
	 <span>I'm a product</span>
	 <div class="about_product">

	 	<div class="description">
		<?php
			include_once "admin/connect.php";
			$id= $_GET['id'];
			$sql="SELECT * FROM `products` WHERE `id`='$id'";
			$result=mysqli_query($conn,$sql);
			$product=mysqli_fetch_assoc($result);
			$img= base64_encode($product['image']);
		?>
	 		<h1><?php echo $product["name"];?></h1>
			<link rel="stylesheet" type="text/css" href="style.css">
			<img class= "img" style=" float: left; height: 500px; width: 425px;" src="data:image/jpg;base64,<?php echo $img;?>">
			<h3><?php echo "Price". ": ". $product["price"]."$"."<br>";?></h3>
			<h3><?php echo "Description". ": ";?></h3><p><?php echo $product["description"]."<br>";?></p>
	 	</div>
	 </div>
</div>


<div class="footer">
	<div class="for_footer">
		<img src="images/for_footer.png">
		<img src="images/for_footer_2.png">
		<img src="images/for_footer_3.png">
		<img src="images/for_footer_4.png">
		<img src="images/for_footer_5.png">
	</div>
	<div class="footer_contact">
		<a href="https://www.facebook.com/TumoGyumriFanPage/" target="_blank"><i class="fab fa-facebook-f"></i></a>
		<a href="https://www.instagram.com/explore/locations/416151155409048/tumo-center-for-creative-technologies-gyumri?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
		<a href="https://www.pinterest.com/pin/697072848551769800/" target="_blank"><i class="fab fa-pinterest-p"></i></a>
		<p>© 2021 Manasyan. All rights reserved.</p>
	</div>
</div>