<?php
    $msg = "";
    if (isset($_POST['update'])) {
        $target = "otherFile/snackes/".basename($_FILES['image']['name']);
        $db = mysqli_connect('localhost', 'root', '', 'susei_food');

        $old_Igd = $_POST['igd_name'];
        $old_Image = $_FILES['image']['name'];
        $old_Price = $_POST['price_igd'];
        $ice_ID = $_POST['igd_ID'];
        $user_ID = $_POST['user_ID'];
    

        $sql = ("UPDATE ingrdients SET igd_Name='$old_Igd', price='$old_Price', image='$old_Image', user_ID= '$user_ID' WHERE igd_ID= $ice_ID ");
        mysqli_query($db ,$sql);
        

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image upload successfully";

        } else {
            $msg = "There was a problem uploading image";
        }
        header("location: http://localhost/mylove/index.php?category=snack");
        
    }
   









    