<?php
if ( ! defined ('ABSPATH')) {
    exit; //Exit if accenssed directly
}
?>
<section class="products">
        <?php do_action('woocommerce_before_main_content'); ?>
        
                <h3 class="product__titile"><?php woocommerce_page_title(); ?></h3>

                <div class="tabs__wrapper">
                    <div class="tabs-container products__container">
                        <div class="tabs-content products__content tabs-content--active">
                            <div class=" product-slider">