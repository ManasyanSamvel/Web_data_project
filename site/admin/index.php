 <?php include_once "connect.php";
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add A Product</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Add A Product</h1>
<div class="form">
<form action = "add.php" method = "POST"  enctype="multipart/form-data">
    <div class="input_div">
    <input type="text" name="name" placeholder="Product Name">
    <br>
    <input type="number" name="price" placeholder="Price">
    <br>
    <input type="file" name="image">
    <textarea name="description" rows="4" cols="42" style="background-color: black; color: white; border: 2px solid #3cef4b; border-radius: 10px; font-size: 17px;"></textarea>
    <br>
    <input type="submit" name="add" value="Add" class="input_send">
    </div>
</form>
</div>
<div class="table">
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
    </tr>
    <?php
    $sql="SELECT * FROM `products`";
    $result=mysqli_query($conn,$sql);
    $products=mysqli_fetch_all($result);
    foreach ($products as $product):
        $img= base64_encode($product[3]);
    ?>
    <tr>
        <td><?php echo $product[0];?></td>
        <td><?php echo $product[1];?></td>
        <td><?php echo $product[2];?></td>
        <td><img 
            style="display: block; height:200px; width: 150px; " src="data:image/jpg;base64,<?php echo $img;?>"></td>
        <td><a href="delete.php?id=<?php echo $product[0];?>">DELETE</a></td>
        <td><a href="update.php?id=<?php echo $product[0];?>">UPDATE</a></td>
    </tr>
    <?php endforeach;?>
</table>
</div>
</body>
</html>