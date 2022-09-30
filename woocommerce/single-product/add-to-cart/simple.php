<?php
if ( ! defined ('ABSPATH')) {
    exit; //Exit if accenssed directly
}
global $product;
if ( ! $product->is_purchasable() ) {
	return;
}
?>

<?php if ( $product->is_in_stock() ) : ?>
    <?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
    

   <div class="tabs-wrapper product-card__tabs">
	   <div class="container">
	   <div class="tabs-container">
	   <div  class="product-card__tab-content ">
            
    <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>


        <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
</form>


<button class="product-card__button">
                                      
                                    <?php
		do_action( 'woocommerce_before_add_to_cart_quantity' );

		woocommerce_quantity_input(
			array(
				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
				'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
			)
		);

		do_action( 'woocommerce_after_add_to_cart_quantity' );
		?>
</button>
	
</div>
</div>
</div>
</div>


    <?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
    <?php endif;?>
	
    
