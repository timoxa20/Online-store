<?php
if ( ! defined ('ABSPATH')) {
    exit; //Exit if accenssed directly
}
    
?>

<div class="product-card__img-box">

<?php  do_action('woocommerce_before_single_product_summary'); ?>
                </div>
                <?php  do_action('woocommerce_single_product_summary'); ?>
                    
                </div>