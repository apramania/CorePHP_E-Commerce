<!-- Requiring Database Connection -->
<?php 
 
    require './Database/DBController.php';
    require './Database/Product.php';  
    require './Database/Cart.php';
    require './Database/Wishlist.php';

   


    // <!-- Creating the object -->
    $db = new DBController();

    // print_r($db->conn);

    // Creating the object for Product.php
    $prod = new Product($db);

    $prod_shuffle = $prod->getData();

    //Creating object for Cart.php

    $cart = new Cart($db);

    $wishlist = new Wishlist($db);

    



?>