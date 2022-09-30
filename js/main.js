$(function() {


    $('.tab').on('click', function(e){
        e.preventDefault();

        $($(this).siblings()).removeClass('tab--active');
        $($(this).parent().siblings().find('div')).removeClass('tabs-content--active');


        $(this).addClass('tab--active');
        $($(this).attr('href')).addClass('tabs-content--active');
    });

    $('.menu__btn').on('click', function(){
        $('.menu-mobile__list').toggleClass('menu-mobile__list--active');
    });

    $('.cloce').on('click', function(c){
        $('.card__box').fadeOut('slow', function(c){
            $('.card__box').remove();
        });
    });	  
   
        $('.footer__top-title').on('click', function(){
            $(this).next().slideToggle();
        });
    jQuery('.banner-section__slider').slick({
        dots: true,
        prevArrow: '<button class="banner-section__slider-btn banner-section__slider-btnprev"><img src="images/arrow-left.svg" alt=""></button>',
        nextArrow: '<button class="banner-section__slider-btn banner-section__slider-btnnext"><img src="images/arrow-right.svg" alt=""></button>',
        responsive: [
            {
                breakpoint: 969,
                settings: {
                    arrows: false
                }
            }
        ]
    });


    $('.product-item__faforite').on('click', function(){
        $(this).toggleClass('product-item__faforite--active');
    });

    // jQuery('.product-slider').slick({
    //     slidesToShow: 4,
    //     slidesToScroll: 1,
    //     prevArrow: '<button class="product-slider__slider-btn product-slider__slider-btnprev"><img src="images/arrow-black-left.svg" alt=""></button>',
    //     nextArrow: '<button class="product-slider__slider-btn product-slider__slider-btnnext"><img src="images/arrow-black-right.svg" alt=""></button>',
    // });


    jQuery('.filter-style').styler();


    $('.filter__item-drop').on('click', function(){
        $(this).toggleClass('.filter__item-drop--active');
        $(this).next().slideToggle();
    });

    jQuery(".js-range-slider").ionRangeSlider({
    type: "double", 
    min: 0,
    max: 1000
    });


});