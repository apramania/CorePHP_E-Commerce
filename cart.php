<?php
    ob_start();
     include 'header.php'
?>

<?php count($prod->getData('cart')) ? include './Templates/_shopping-cart.php' : include './Templates/notFound/_notfound_cart.php'; ?>



<?php count($prod->getData('wishlist')) ? include './Templates/_wishlist.php' : include './Templates/notFound/_notfound_cart.php'; ?>

    
    <?php include './Templates/_new-phones.php' ?>

<?php include 'footer.php' ?>