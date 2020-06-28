<?php

    require '../Database/DBController.php';
    require '../Database/Product.php';
    
    $db = new DBController();
    
    $prod = new Product($db);

    
    
    if (isset($_POST['itemid'])){
        $result = $prod->getProdById($_POST['itemid']);
        echo json_encode($result);
    }
?>