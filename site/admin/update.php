<?php
	include_once "connect.php";
	$id= $_GET['id'];
	$sql="SELECT * FROM `products` WHERE `id`='$id'";
	$result=mysqli_query($conn,$sql);
	$product=mysqli_fetch_assoc($result);
?>
<head>
    <title>Add A Product</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<h1>Update the pouduct</h1>
<div class="form">
<form action = "updateAction.php" method = "POST">
    <div class="input_div">
	<input type="hidden" name="id" value="<?php echo $id;?>">
    <input type="text" name="name" 
    value="<?php echo $product['name'];?>">
    <br>
    <input type="number" name="price"
    value="<?php echo $product['price'];?>">
    <br>
    <textarea name="description" style="background-color: black; color: white; border: 2px solid #3cef4b; border-radius: 10px; font-size: 17px;"  rows="4" cols="42">
    <?php echo $product['description'];?>
    </textarea>
    <br>
	<input type="submit" name="add" value="Update" class="input_send">
    </div>
</form>
</div>