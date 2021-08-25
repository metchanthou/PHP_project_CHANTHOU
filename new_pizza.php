<?php
    $msg = "";
    if (isset($_POST['add'])) {
        $target = "otherFile/pizza/".basename($_FILES['image']['name']);
        $db = mysqli_connect('localhost', 'root', '', 'susei_food');

        $new_Image = $_FILES['image']['name'];
        $new_Pizza = $_POST['pizza_name'];
        $new_Price = $_POST['price_pizza'];
        $user_ID = 9;

        $sql = ("INSERT INTO pizza (pizza_Name, price, image, user_ID) VALUES ('$new_Pizza', '$new_Price', '$new_Image', '$user_ID')");
        mysqli_query($db, $sql);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image upload successfully";

        } else {
            $msg = "There was a problem uploading image";
        }
        header("Location: http://localhost/mylove/index.php?category=pizza");
    }
   









    