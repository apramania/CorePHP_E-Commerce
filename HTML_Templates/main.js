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

    //product quantity
    let $qty_up_1 = $(".qty .qty-up-1");
    let $qty_down_1 = $(".qty .qty-down-1");
    let $qty_input_1 = $(".qty .qty_input_1");


    //click on qty_up button
    $qty_up_1.click(function(e){
        if($qty_input_1.val() >= 1 && $qty_input_1.val() <= 9){
            $qty_input_1.val(function(i, oldvalue){
                return ++oldvalue;
            })
        }
    });

    //click on qty_down button
    $qty_down_1.click(function(e){
        if($qty_input_1.val() > 1 && $qty_input_1.val() <= 10){
            $qty_input_1.val(function(i, oldvalue){
                return --oldvalue;
            })
        }
    });

    
    let $qty_up_2 = $(".qty .qty-up-2");
    let $qty_down_2 = $(".qty .qty-down-2");
    let $qty_input_2 = $(".qty .qty_input_2");


      //click on qty_up button
      $qty_up_2.click(function(e){
        if($qty_input_2.val() >= 1 && $qty_input_2.val() <= 9){
            $qty_input_2.val(function(i, oldvalue){
                return ++oldvalue;
            })
        }
    });

    //click on qty_down button
    $qty_down_2.click(function(e){
        if($qty_input_2.val() > 1 && $qty_input_2.val() <= 10){
            $qty_input_2.val(function(i, oldvalue){
                return --oldvalue;
            })
        }
    });


    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $qty_input = $(".qty .qty_input");


      //click on qty_up button
      $qty_up.click(function(e){
        if($qty_input.val() >= 1 && $qty_input.val() <= 9){
            $qty_input.val(function(i, oldvalue){
                return ++oldvalue;
            })
        }
    });

    //click on qty_down button
    $qty_down.click(function(e){
        if($qty_input.val() > 1 && $qty_input.val() <= 10){
            $qty_input.val(function(i, oldvalue){
                return --oldvalue;
            })
        }
    });





});