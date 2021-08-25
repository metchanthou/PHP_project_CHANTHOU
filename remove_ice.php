<?php 
    require_once('streamfile/function.php');
    $iceid = $_GET['id'];
    $deleteice = removeICE_CREAM($iceid);
     
    if ($deleteice) {
        header("location: http://localhost/mylove/index.php?category=ice_cream");
    }
    

   