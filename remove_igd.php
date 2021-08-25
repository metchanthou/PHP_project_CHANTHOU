<?php 
    require_once('streamfile/function.php');
    $igdid = $_GET['id'];
    $deleteigd = removeIGD($igdid);
     
    if ($deleteigd) {
        header("Location: http://localhost/mylove/index.php?category=snack");
    }
    

   