<?php
if ( ! defined ('ABSPATH')) {
    exit; //Exit if accenssed directly
}

get_header();

get_navigation();

?>
 

        <?php remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10); ?>
                <?php do_action('woocommerce_before_main_content'); ?>
      


    <section class="catalog">
        <div class="container">  
            <div class="catalog__inner-list"> 
                <div class="product-item__wrapper">
                    <?php if(have_posts()) :?>
                    <?php  while(have_posts()) : the_post(); ?>
                        <?php wc_get_template_part('content', 'product-cat');?>
                    <?php endwhile;?>
                        <?php else : ?>
                        <?php wc_get_template('loop/no-products-found.php') ?>
                    <?php endif; ?>
                    <?php do_action('woocommerce_after_shop_loop'); ?>
                    
                </div>
            </div>
        </div>  
    </section>
<?php

get_footer();
?>

