<?php 
    require_once('streamfile/function.php');
    $pizzaid = $_GET['id'];
    $deletepizza = removePIZZA($pizzaid);
     
    if ($deletepizza) {
        header("Location: http://localhost/mylove/index.php?category=pizza");
    }
    

   