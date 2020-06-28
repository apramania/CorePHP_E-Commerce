$(document).ready(function(){

    //banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel(
            { 
                loop: true,
                dots: true,
                items: 1,
                autoplay: true,
            
            }
        );

    //top sale carousel
    $("#top-sale .owl-carousel").owlCarousel(
        { 
            loop: true,
            nav: true,
            dots: false,
            responsive: {
                0:{
                    items: 1
                },
                600:{
                    items: 3
                },
                1000:{
                    items: 5
                }
            }
        
        }
    );

    //isotop plugin
    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    //filter items on button click
    $(".button-group").on("click","button", function(){
        var $filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: $filterValue});
    });

    //new phones carousel
    $("#new-phones .owl-carousel").owlCarousel(
        { 
            loop: true,
            nav: true,
            dots: false,
            responsive: {
                0:{
                    items: 1
                },
                600:{
                    items: 3
                },
                1000:{
                    items: 5
                }
            }
        
        }
    );

    //blogs
    $("#blogs .owl-carousel").owlCarousel(
        { 
            loop: true,
            nav: true,
            dots: false,
            responsive: {
                0:{
                    items: 1
                },
                600:{
                    items: 3
                }
            }
        
        }
    );


    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    // let $qty_input = $(".qty .qty_input");
    let $deal_price = $("#deal-price");


      //click on qty_up button
      $qty_up.click(function(e){

        let $qty_input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id = '${$(this).data("id")}']`);

        //change prodcut price using ajax call
        $.ajax({url : "./Templates/ajax.php" , type: "post", data: { itemid: $(this).data("id")}, success: function(result){
            let obj = JSON.parse(result);
            let item_price = obj[0]['item_price'];

            if($qty_input.val() >= 1 && $qty_input.val() <= 9){
                $qty_input.val(function(i, oldvalue){
                    return ++oldvalue;
                });

                //increase price of the product
                $price.text(parseInt(item_price * $qty_input.val()).toFixed(2));


                let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                $deal_price.text(subtotal.toFixed(2));
            }

            


        }});//closing ajax request
        
        
        
    });

    //click on qty_down button
    $qty_down.click(function(e){

        let $qty_input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id = '${$(this).data("id")}']`);
        //change prodcut price using ajax call
        $.ajax({url : "./Templates/ajax.php" , type: "post", data: { itemid: $(this).data("id")}, success: function(result){
            let obj = JSON.parse(result);
            let item_price = obj[0]['item_price'];

            if($qty_input.val() > 1 && $qty_input.val() <= 10){
                $qty_input.val(function(i, oldvalue){
                    return --oldvalue;
                });

                //increase price of the product
                $price.text(parseInt(item_price * $qty_input.val()).toFixed(2));


                let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                $deal_price.text(subtotal.toFixed(2));
            }

            


        }});//closing ajax request




    });

});