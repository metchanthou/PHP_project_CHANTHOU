<?php 
    require_once('streamfile/function.php');
    $foodid = $_GET['id'];
    $deletefood = removeFOOD($foodid);
     
    if ($deletefood) {
        header("Location: http://localhost/mylove/index.php?category=food");
    }
    

   