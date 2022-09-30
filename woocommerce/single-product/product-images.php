<?php
if ( ! defined ('ABSPATH')) {
    exit; //Exit if accenssed directly
}
 global $post, $product;


?>
 <div class="product-card__img-box">
 <?php
if(has_post_thumbnail()){
$props = wc_get_product_attachment_props(get_post_thumbnail_id(), $post);
$image = get_the_post_thumbnail($post->ID, apply_filters('single_product_large_thumbnail_size', 'shop_single'), array(
'class' => 'product-card__img',
'alt' => $props['alt'],
));
echo apply_filters('woocommerce_single_product_image_html',
sprintf(
    esc_url($props['url']),
    $image
),
$post ->ID
);
}



?>


</div> 