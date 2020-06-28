<?php
    //  $wlist_shuff = $wishlist->getData();


    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['wishlist-delete'])){
            $deleterecord = $cart->deleteById($_POST['item_id'], 'wishlist');
        }
        if(isset($_POST['add-cart'])){
            $cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
        }
    }

?>
<!-- Shopping Cart Section -->
<section id="shopping-cart" class="py-3">
                <div class="container-fluid w-75">
                    <h5 class="font-goth font-size-20">Wishlist</h5>

                    <!-- Shopping cart items section -->
                    <div class="row">
                        <div class="col-sm-9">
                            <?php 
                                
                                foreach($prod->getData('wishlist') as $item): 
                                $result = $prod->getProdById($item['item_id']);
                                $subTotal[] = array_map(function($item){
                                
                            ?>
                                <!-- cart item -->
                                <div class="row border-top py-3 mt-3">
                                    <div class="col-sm-2">
                                        <img src="<?php echo $item['item_image']; ?>" style="height: 120px;" alt="product-1" class="img-fluid">
                                    </div>
                                    <div class="col-sm-8">
                                        <h5 class="font-goth font-size-20"><?php echo $item['item_name']; ?></h5>
                                        <small><?php echo $item['item_brand']; ?></small>
                                        <div class="d-flex">
                                            <div class="rating text-warning font-size-12">
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                            </div>
                                            <a href="#" class="font-ral px-2 font-size-14">20,534 ratings</a>
                                        </div>

                                        <!-- product qty -->
                                        <div class="qty d-flex pt-2">
                                            <form method="post">
                                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                                                <button type="submit" name="wishlist-delete"  class="btn font-canto text-danger px-3 border-right">Delete</button>
                                            </form>
                                            
                                            <form method="post">
                                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                                                <button type="submit" name="add-cart"  class="btn font-canto text-danger">Add To Cart</button>
                                            </form>
                                        </div>
                                        <!-- product qty -->
                                    </div>

                                    <div class="col-sm-2 text-right">
                                        <div class="font-size-20 font-danger font-goth">
                                            $<span class="product_price" data-id="<?php echo $item['item_id']; ?>"><?php echo $item['item_price']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- cart item -->
                            <?php 
                                return $item['item_price'];
                                }, $result);
                                // print_r($subTotal);
                                endforeach; 
                                // print_r($subTotal);
                            ?>
                        </div>
                    </div>
                    <!-- Shopping cart items section -->
                </div>
            </section>
            <!-- Shopping Cart Section -->