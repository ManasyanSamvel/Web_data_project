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
<div class="main_2_1">
	<h1>PRODUCTS</h1>
	<h1>SHOP <span>ALL</span></h1>
</div>
<div class="allproducts">
<?php
    $sql="SELECT * FROM `products`";
    $result=mysqli_query($conn,$sql);
    $products=mysqli_fetch_all($result);
    foreach ($products as $product):
        $img= base64_encode($product[3]);
?>
	
        <div class="single">
        <img style="display: block; height:400px; width: 300px; " src="data:image/jpg;base64,<?php echo $img;?>">
        <?php echo "Name". ": ". $product[1]."<br>";?>
        <?php echo "Price". ": ". $product[2]."$"."<br>";?>
        <a href="singles.php?id=<?php echo $product[0];?>">READ MORE</a>
        </div>
<?php endforeach;?>
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
</body>
</html>