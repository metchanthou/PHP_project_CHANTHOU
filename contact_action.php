<?php
    $msg = "";
    if (isset($_POST['send'])) {
        $target = "otherFile/user/".basename($_FILES['image']['name']);
        $db = mysqli_connect('localhost', 'root', '', 'susei_food');

        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $image = $_FILES['image']['name'];
        $position ="User";
        $cmt = $_POST['comment'];

        $sql = ("INSERT INTO username (first_name, last_name, age, email, image, information, description) VALUES ('$f_name', '$l_name', '$age', '$email', '$image', '$position', '$cmt')");
        mysqli_query($db, $sql);
       
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image upload successfully";

        } else {
            $msg = "There was a problem uploading image";
        }
        header("Location: http://localhost/mylove/index.php?page=user");
    }
   









    