<?php
    $msg = "";
    if (isset($_POST['update'])) {
        $target = "otherFile/ice_cream/".basename($_FILES['image']['name']);
        $db = mysqli_connect('localhost', 'root', '', 'susei_food');

        $old_Ice = $_POST['ice_name'];
        $old_Image = $_FILES['image']['name'];
        $old_Price = $_POST['price_ice'];
        $ice_ID = $_POST['ice_ID'];
        $user_ID = $_POST['user_ID'];
    

        $sql = ("UPDATE ice_cream SET ice_Name='$old_Ice', price='$old_Price', image='$old_Image', user_ID= '$user_ID' WHERE ice_ID= $ice_ID ");
        mysqli_query($db ,$sql);
        

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image upload successfully";

        } else {
            $msg = "There was a problem uploading image";
        }
        header("location: http://localhost/mylove/index.php?category=ice_cream");
        
    }
   









    