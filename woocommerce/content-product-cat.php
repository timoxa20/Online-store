<?php
if ( ! defined ('ABSPATH')) {
    exit; //Exit if accenssed directly
}

get_header();

get_navigation();

global $product;

if(empty($product) || !$product->is_visible() ){
    return;
}
?>
  <div class="div__content">
<?php do_action('woocommerce_before_shop_loop_item'); ?>
<?php do_action('woocommerce_before_shop_loop_item_title'); ?>


  
        <?php 
        do_action('woocommerce_shop_loop_item_title');
        remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating');
        do_action('woocommerce_after_shop_loop_item_title');
         ?>
        
        <?php do_action('woocommerce_after_shop_loop_item');  ?>
</div>