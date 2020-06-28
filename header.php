<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Store</title>

    <!-- Linking Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Linking Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="images/page_icon.png" >

    <!-- Requiring functions.php -->
    <?php require 'functions.php'; ?>
    
</head>
<body>

    <!-- start HEADER -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-ral font-size-12 text-black-50 m-0">Old Railway Road, Jalandhar,Ludhiana Punjab 144008 01812234057</p>
            <div class="font-ral font-size-14">
                <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                <a href="#" class="px-3 border-right text-dark">Wishlist(0)</a>
            </div>
        </div>
        <!-- Primary navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark secondary-color-bg">
            <a class="navbar-brand" href="#">Mobile Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav m-auto font-goth">
                <li class="nav-item">
                  <a class="nav-link" href="#">On Sale</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Category</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Coming Soon</a>
                </li>
              </ul>
              <form action="#" class="font-size-14 font-ral">
                  <a href="cart.php" class="py-2 rounded-pill primary-color-bg">
                      <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                      <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($prod->getData('cart')); ?></span>
                  </a>
              </form>
            </div>
        </nav>
        <!-- end of Primary Navigation -->
    </header>
    <!-- stop HEADER -->

    <!-- start MAIN -->


        <main id="main-site">