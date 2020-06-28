<!-- Special Price Section -->
<?php 
    $brand = array();
    foreach($prod_shuffle as $item){
        $brand[] = $item['item_brand'];
        $unique = array_unique($brand);
        sort($unique);
    }

    shuffle($prod_shuffle);

    //request post method
    if($_SERVER['REQUEST_METHOD'] == "POST"){
         if($_POST['special_price_submit']){
            //call the cart class
            $cart->addToCart($_POST['user_id'], $_POST['item_id']);
        }
    }

?>
<section id="special-price">
        <div class="container">
            <h4 class="font-gothic font-size-20">Special Price</h4>
            <div id="filters" class="button-group text-right font-canto font-size-16">
            <button class="btn is-checked" data-filter="*">All Brands</button>
                <?php  
                    array_map(function($brand){?>
                    <button class="btn" data-filter=".<?php echo $brand; ?>"><?php echo $brand; ?></button>
                 <?php   }, $unique);
                ?>
                
                <!-- <button class="btn" data-filter=".Samsung">Samsung</button>
                <button class="btn" data-filter=".Apple">Apple</button>
                <button class="btn" data-filter=".Redmi">Redmi</button> -->
            </div>
            <div class="grid">
                <?php foreach($prod_shuffle as $item): ?>
                <div class="grid-item <?php echo $item['item_brand']; ?> border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-ral">
                            <a href="product.php?item_id=<?php echo $item['item_id']; ?>"><img src="<?php echo $item['item_image']; ?>" alt="Product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6><?php echo $item['item_name']; ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span><?php echo $item['item_brand']; ?></span>
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
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Special Price Section -->