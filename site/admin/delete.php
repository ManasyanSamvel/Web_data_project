<?php
	include_once "connect.php";
	$id= $_GET['id'];
	$sql="DELETE FROM `products` WHERE `id`='$id'";

	mysqli_query($conn,$sql);
	mysqli_close();
	header("location:index.php");
?>