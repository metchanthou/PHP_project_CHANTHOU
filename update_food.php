<?php
    $msg = "";
    if (isset($_POST['update'])) {
        $target = "otherFile/food/".basename($_FILES['image']['name']);
        $db = mysqli_connect('localhost', 'root', '', 'susei_food');

        $old_Food = $_POST['food_name'];
        $old_Image = $_FILES['image']['name'];
        $old_Price = $_POST['price_food'];
        $food_ID = $_POST['food_ID'];
        $user_ID = 9;
    

        $sql = ("UPDATE foods SET food_Name='$old_Food', price='$old_Price', image='$old_Image', user_ID= '$user_ID' WHERE food_ID= $food_ID ");
        mysqli_query($db ,$sql);
        

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image upload successfully";

        } else {
            $msg = "There was a problem uploading image";
        }
        header("location: http://localhost/mylove/index.php?category=food");
        
    }
   









    