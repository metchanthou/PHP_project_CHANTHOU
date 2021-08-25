<?php 
    include_once('partail/header.php'); 
    include_once('partail/navbar.php');
    if (isset($_GET['page'])) {

        if ($_GET['page']=='user') {
            include_once('allPages/user.php');

        } elseif ($_GET['page']== 'menu') {
            include_once('allPages/menu.php');

        } elseif ($_GET['page']== 'home') {
            include_once('allPages/home.php');
            
        } elseif ($_GET['page'] == 'shop') {
            include_once('allPages/shop.php');          

        } elseif ($_GET['page'] == 'contact') {
            include_once('contact.php');

        } elseif ($_GET['page'] == 'blog') {
            include_once ('allPages/blog.php');
        }

    } elseif (isset($_GET['category'])) {

        if ($_GET['category'] =='food') {
            include_once('categories/food.php');

        } elseif ($_GET['category'] == 'pizza') {
            include_once('categories/pizza.php');

        } elseif ($_GET['category'] == 'snack') {
            include_once('categories/snack.php');

        } elseif ($_GET['category'] == 'ice_cream') {
            include_once('categories/ice_cream.php');

        }        
    }  
    else {
        include_once('allPages/home.php');
    }

    include_once('allPages/footers.php');
    include_once('partail/footer.php'); 
    