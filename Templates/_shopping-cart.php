<?php
    shuffle($prod_shuffle);

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['button_delete_cart'])){
            $deleterecord = $cart->deleteById($_POST['item_id']);
        }
        if(isset($_POST['wishlist_add'])){
           $cart->saveForLater($_POST['item_id']);
        }
    }

?>
<!-- Shopping Cart Section -->
<section id="shopping-cart" class="py-3">
                <div class="container-fluid w-75">
                    <h5 class="font-goth font-size-20">Shopping Cart</h5>

                    <!-- Shopping cart items section -->
                    <div class="row">
                        <div class="col-sm-9">
                            <?php 
                                
                                foreach($prod->getData('cart') as $item): 
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
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                            </div>
                                            <a href="#" class="font-ral px-2 font-size-14">20,534 ratings</a>
                                        </div>

                                        <!-- product qty -->
                                        <div class="qty d-flex pt-2">
                                            <div class="d-flex font-ral w-25">
                                                <button class="qty-up border bg-light" data-id="<?php echo $item['item_id']; ?>"><i class="fas fa-angle-up"></i></button>
                                                <input type="text" data-id="<?php echo $item['item_id']; ?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                                <button class="qty-down border bg-light" data-id="<?php echo $item['item_id']; ?>"><i class="fas fa-angle-down"></i></button>
                                            </div>
                                            <form method="post">
                                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                                                <button type="submit" name="button_delete_cart" class="btn font-canto text-danger px-3 border-right">Delete</button>
                                            </form>
                                            <!--Add to wishlist  -->
                                            <form method="post">
                                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                                                <button type="submit" name="wishlist_add" class="btn font-canto text-danger">Save For Later</button>
                                            </form> 
                                            <!--Add to wishlist  -->
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
                        <div class="col-sm-3">
                            <!-- sub total section -->
                            <div class="sub-total text-center mt-2 border">
                                <h6 class="font-size-12 font-ral text-success py-3"><i class="fas fa-check"></i>Your order is eligible for free delivery</h6>
                                <div class="border-top py-4">
                                    <h5 class="font-goth font-size-20">Subtotal(<?php echo  isset($subTotal) ? count($subTotal) : 0; ?> items)&nbsp;<span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $cart->getSubTotal($subTotal) : 0 ;?></span></span></h5>
                                    <button type="submit" class="btn btn-warning mt-3">Proceed To Buy</button>
                                </div>
                            </div>
                            <!-- sub total section -->
                        </div>
                    </div>
                    <!-- Shopping cart items section -->
                </div>
            </section>
            <!-- Shopping Cart Section -->