<?php
    $msg = "";
    if (isset($_POST['add'])) {
        $target = "otherFile/food/".basename($_FILES['image']['name']);

        $db = mysqli_connect('localhost', 'root', '', 'susei_food');

        $new_Image = $_FILES['image']['name'];
        $new_Food = $_POST['food_name'];
        $new_Price = $_POST['price_food'];
        $user_ID = 9;
        

        $sql = ("INSERT INTO foods(food_Name, price, image, user_ID) VALUES ('$new_Food', '$new_Price', '$new_Image','$user_ID')");
        mysqli_query($db, $sql);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image upload successfully";

        } else {
            $msg = "There was a problem uploading image";
        }
        header("location: http://localhost/mylove/index.php?category=food");
    }
   









    