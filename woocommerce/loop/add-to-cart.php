<?php
if ( ! defined ('ABSPATH')) {
    exit; //Exit if accenssed directly
}

global $product;


if($price_html = $product->get_price_html()) {
	
	if(is_shop()) {
		
	
	echo apply_filters('woocommerce_loop_add_to_cart_link',
	sprintf('<a href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" ><p class="price product-item__price %s">%s</p></a>',
				esc_url($product->add_to_cart_url()),
				esc_attr(isset($quantity) ? $quantity : 1),
				esc_attr($product->id),
				esc_attr($product->get_sku()),
				esc_attr(isset($class) ? $class : 'button'),
				$price_html
			));
	}
	else {
		
		echo apply_filters(
			'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
			sprintf(
				'<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
				esc_url( $product->add_to_cart_url() ),
				esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
				esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
				isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
				esc_html( $product->add_to_cart_text() )
			),
			$product,
			$args
		);
	}
		
		
		
	}		

?>


