<?php 
        if(isset($_POST['add'])){
            include_once "connect.php";
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
            $sql="INSERT INTO`products` (`name`,`price`,`image`,`description`) VALUES ('$name','$price', '$img', '$description')";
            
            mysqli_query($conn,$sql);
            mysqli_close();
            header("location:index.php");

        }
        else{
            header("location:404.php");
        }


?>