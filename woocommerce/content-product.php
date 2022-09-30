<?php
if ( ! defined ('ABSPATH')) {
    exit; //Exit if accenssed directly
}

global $product;
?>

<!-- <div class="product-slider__item">
    <div class="product-item__wrapper">
        <button class="product-item__faforite"></button>
        <button class="product-item__basket">
            <img src="<?php bloginfo('template_directory'); ?>/images/basket-white.svg" alt="">
        </button>
        <a class="product-item__notify-link" href="#">
            <span>Сообщить о поступлении</span>
        </a>
        <div class="product-item product-item--sale" href="#">
            
            <a href="#"> <img class="product-item__img" src="<?php bloginfo('template_directory'); ?>/images/semena.jpg" alt=""></a>
            <p class="product-item__hover-text">посмотреть товар</p>
            <h4 class="product-item__title">
                Водонепроницаемый
                Рюкзак
            </h4>
            <p class="price product-item__price">
                9 800 ₽
            </p>
            <p class="product-item__notify-text">
                нет в наличии
            </p>
        </div>
    </div>
</div> -->
<div class="product-slider__item">
 <div class="product simpleCart_shelfItem product-item__wrapper">
 <div class="product-item " >
        <button class="product-item__basket">
            <img class="item_thumb" src="<?php bloginfo('template_directory'); ?>/images/basket-white.svg" alt="">
        </button>
    <?php do_action('woocommerce_before_shop_loop_item'); ?>

    <?php do_action('woocommerce_before_shop_loop_item_title'); ?>


    <?php do_action('woocommerce_shop_loop_item_title'); ?>

    <?php do_action('woocommerce_after_shop_loop_item_title'); ?>

    <?php do_action('woocommerce_after_shop_loop_item'); ?>
    </div>
    </div>
</div>