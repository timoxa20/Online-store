<?php
if ( ! defined ('ABSPATH')) {
    exit; //Exit if accenssed directly
}

get_header();

get_navigation();

?>





<section class="product-card">
        <div class="container">
            <?php do_action('woocommerce_before_main_content'); ?>
            <?php do_action('woocommerce_before_single_product'); ?>
            <div class="product-card__inner">
                <?php while(have_posts()) : the_post();?>
                    <?php wc_get_template_part('content','single-product'); ?>
                <?php endwhile; ?>
                
            </div>
        </div>
    </section>


    <?php do_action('woocommerce_after_main_content'); ?>
    <?php

get_footer();
?>