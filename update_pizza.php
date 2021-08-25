<?php
    $msg = "";
    if (isset($_POST['update'])) {
        $target = "otherFile/pizza/".basename($_FILES['image']['name']);
        $db = mysqli_connect('localhost', 'root', '', 'susei_food');

        $old_Pizza = $_POST['pizza_name'];
        $old_Image = $_FILES['image']['name'];
        $old_Price = $_POST['price_pizza'];
        $pizza_ID = $_POST['pizza_ID'];
        $user_ID = $_POST['user_ID'];
    

        $sql = ("UPDATE pizza SET pizza_Name='$old_Pizza', price='$old_Price', image='$old_Image', user_ID= '$user_ID' WHERE pizza_ID= $pizza_ID ");
        mysqli_query($db ,$sql);
        

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image upload successfully";

        } else {
            $msg = "There was a problem uploading image";
        }
        header("location: http://localhost/mylove/index.php?category=pizza");
        
    }
   









    