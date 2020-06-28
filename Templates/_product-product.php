 <!-- Product -->
 <?php 
 
    $id = $_GET['item_id'];
    $prod_shuffle = $prod->getData();

 
 ?>
 <section id="product" class="py-3">
    <?php foreach($prod_shuffle as $item): ?>
        <?php if($item['item_id'] == $id) : ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <img src="<?php echo $item['item_image']; ?>" alt="product-1" class="img-fluid">
                    <div class="form-row pt-4 font-size-16 font-goth">
                        <div class="col">
                            <button type="submit" class="btn btn-danger form-control">Proceed To Buy</button>
                        </div>
                        <div class="col">
                        <?php
                                        if(in_array($item['item_id'], $cart->getCartId($prod->getData('cart')))){
                                            echo '<button type="submit" disabled  class="btn btn-success font-size-12">In The Cart</button>';
                                        }else{
                                            echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add To Cart</button>';
                                        }
                                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 py-5">
                    <h5 class="font-goth font-size-20"><?php echo $item['item_name']; ?></h5>
                    <small>By <?php echo $item['item_brand']; ?></small>
                    <div class="d-flex">
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <a href="#" class="px-2 font-ral font-size-14">20,534 ratings| 18k+ Answers</a>
                    </div>
                    <hr class="m-0">
                        <!-- Product Price -->
                    <table class="my-3">
                        <tr class="font-ral font-size-14">
                            <td>M.R.P.</td>
                            <td><strike>$162.00</strike></td>
                        </tr>
                        <tr class="font-ral font-size-14">
                            <td>Deal Price</td>
                            <td class="font-size-20 text-danger">$<span><?php echo $item['item_price']; ?></span> <small class="text-dark">&nbsp;&nbsp;inclusive taxes</small> </td>
                        </tr>
                        <tr class="font-ral font-size-14">
                            <td>You Save:</td>
                            <td class="font-size-20 text-danger">$10.00 </td>
                        </tr>
                    </table>
                    <!-- Product Price -->

                    <!-- Policy -->

                    <div id="policy">
                        <div class="d-flex">
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-20 secondary-color">
                                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-ral text-size-12">10 Days <br>Replacement</a>
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-20 secondary-color">
                                    <span class="fas fa-truck border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-ral text-size-12">Vibgyor <br>Delivered</a>
                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-20 secondary-color">
                                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                </div>
                                <a href="#" class="font-ral text-size-12">1 year <br>Warranty</a>
                            </div>
                        </div>
                    </div>

                    <!-- Policy -->
                    <hr>

                    <!-- order details -->
                    <div id="order-details" class="font-ral d-flex flex-column text-dark">
                        <small>Delivered by Mar 29- Apr 1</small>
                        <small>Sold by <a href="#">Daily Electronics</a> (4.5 out of 5 | 18,548 ratings)</small>
                        <small><i class="fas fa-map-marker-alt primary-color"></i>&nbsp;&nbsp;Deliver to Customer - 42124</small>
                    </div>
                    <!-- order details -->

                    <div class="row">
                        <div class="col-6">
                            <!-- color -->
                            <div class="color my-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-goth">Color:</h6>
                                    <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    <div class="p-2 primary-color-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    <div class="p-2 secondary-color-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                </div>
                            </div>
                            <!-- color -->
                        </div>
                        <div class="col-6">
                            <div class="qty d-flex">
                                <h6 class="font-goth">Qty:</h6>
                                <div class="px-4 d-flex font-ral">
                                    <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                    <input type="text"  data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                    <button class="qty-down border bg-light"  data-id="pro1"><i class="fas fa-angle-down"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- size -->
                    <div class="size my-3">
                        <h6 class="font-goth">Size:</h6>
                        <div class="d-flex justify-content-between w-75">
                            <div class="font-canto border p-2">
                                <button class="btn p-0 font-size-14">4GB Ram</button>
                            </div>
                            <div class="font-canto border p-2">
                                <button class="btn p-0 font-size-14">6GB Ram</button>
                            </div>
                            <div class="font-canto border p-2">
                                <button class="btn p-0 font-size-14">8GB Ram</button>
                            </div>
                        </div>
                    </div>
                    <!-- size -->


                </div>

                <div class="col-12">
                    <h6 class="font-canto">Product Description</h6>
                    <hr>
                    <p class="font-ral font-size-14">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, harum voluptates, dolorum facere esse sed dolores omnis rem illum veritatis magnam ea labore animi ullam alias odit perferendis, recusandae aliquam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit nihil facilis beatae, asperiores commodi eos adipisci aut unde. Recusandae, nemo. Reprehenderit, odit consequuntur eaque officiis non quam reiciendis impedit exercitationem!
                        <br><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. At minima, quae architecto, vitae itaque vero laudantium aperiam ea reiciendis fugit suscipit, reprehenderit culpa rerum? Rerum quaerat et numquam? Rem, vitae?
                    </p>
                </div>
            </div>
        </div>
        <?php endif; ?>
    <?php endforeach; ?>

</section>
            <!-- Product -->