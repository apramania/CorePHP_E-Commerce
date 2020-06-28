
<!-- Shopping Cart Section -->
<section id="shopping-cart" class="py-3">
                <div class="container-fluid w-75">
                    <h5 class="font-goth font-size-20">Shopping Cart</h5>

                    <!-- Shopping cart items section -->
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="row border-top py-3 mt-3">
                                <div class="col-sm-12 text-center py-2">
                                    <img src="./assets/blog/empty_cart.png" alt="" class="img-fluid" style="height:200px;">
                                    <p class="font-canto text-black-50 font-size-16">Empty Cart</p>
                                </div>
                            </div>
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