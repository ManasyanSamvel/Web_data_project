<?php 
	include_once "connect.php";
	$name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$id=$_POST['id'];
	$sql="UPDATE `products` SET `name`='$name',`price`='$price',`description`='$description' WHERE `id`='$id'";
	mysqli_query($conn,$sql);
	mysqli_close();
	header("location:index.php");
?>