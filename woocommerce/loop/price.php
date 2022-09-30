<?php
if ( ! defined ('ABSPATH')) {
    exit; //Exit if accenssed directly
}

global $product;
$price_html = $product->get_price_html();
if($price_html && !is_shop()) :
?>

<p class="price product-item__price">
            <?php echo $price_html?>
        </p>
        
        
</div>

    <?php endif;?>