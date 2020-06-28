<!-- Top Sale -->
<?php
    $prod_shuffle = $prod->getData();
    shuffle($prod_shuffle);

    //request post method
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if($_POST['top_sale_submit']){
            //call the cart class
            $cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }
?>
<section id="top-sale">
        <div class="container py-5">
            <h4 class="font-gothic font-size-20">Top Sale</h4>
            <hr>
            <!-- Owl carousel -->
            <div class="owl-carousel owl-theme">
                <?php foreach($prod_shuffle as $item): ?>
                    <div class="item py-2">
                        <div class="product font-ral">
                            <a href="product.php?item_id=<?php echo $item['item_id']; ?>"><img src="<?php echo $item['item_image'] ?? './assets/products/1.png' ?>" alt="Product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6><?php echo $item['item_name'] ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span><?php echo $item['item_price'] ?></span>
                                </div>
                                <form method="post">
                                    <input type="hidden" name = "item_id" value="<?php echo $item['item_id']; ?>">
                                    <input type="hidden" name = "user_id" value="<?php echo 1; ?>">
                                    <?php
                                        if(in_array($item['item_id'], $cart->getCartId($prod->getData('cart')) ?? [])){
                                            echo '<button type="submit" disabled  class="btn btn-success font-size-12">In The Cart</button>';
                                        }else{
                                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add To Cart</button>';
                                        }
                                    ?>
                                    
                                </form>
                                
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Top Sale -->