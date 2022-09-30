<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

$cat_count = sizeof(get_the_terms($post->ID, 'product_cat'));
$tag_count = sizeof(get_the_terms($post->ID, 'product_tag'));
?>

<?php do_action( 'woocommerce_product_meta_start' ); ?>
<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
    
<div class="tabs-wrapper product-card__tabs">
    <div class="tabs">
        <div class="product-card__tab ">Характеристики</div>
    </div>
    <div class="tabs-container">
        <div  class="product-card__tab-content ">
            <ul class="product-card__list">
                <li class="product-card__item">
                                    
                    <div class="product-card__item-left"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?></div>
                    <div class="product-card__item-right"><?php echo $product->get_sku() ?></div>
                </li>
                <?php endif; ?>
                <li class="product-card__item">
                                    <?php echo wc_get_product_category_list( $product->get_id(), ', ', '<div class="product-card__item-left">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . '</div><div class="product-card__item-right">', '</div>' ); ?>
                </li>
                
                                    <li class="product-card__item">
                                        <div class="product-card__item-left">Тип двигателя</div>
                                        <div class="product-card__item-right">Бензиновый</div>
                                    </li>
                                    <li class="product-card__item">
                                        <div class="product-card__item-left">Год выпуска</div>
                                        <div class="product-card__item-right"> 2018</div>
                                    </li>
            </ul>
                                
        </div>
    </div>
</div>
<?php do_action('woocommerce_product_meta_end'); ?>