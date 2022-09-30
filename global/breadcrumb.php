<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! empty( $breadcrumb ) ) {

	echo $wrap_before;

	foreach ( $breadcrumb as $key => $crumb ) {

		echo $before;

		if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
			echo '<a href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>';
		} else {
			echo esc_html( $crumb[0] );
		}

		echo $after;

		if ( sizeof( $breadcrumb ) !== $key + 1 ) {
			echo $delimiter;
		}
	}



	echo $wrap_after;

}


$taxonomy = 'product-cat';
$terms = get_terms(array(
    'taxonomy' => $taxonomy,
    'hide_empty' => FALSE,
));
$ids = array();
foreach($terms as $term) {
    $ids[] = $term->term_id;
}

$odj = get_queried_object();
$termC = $odj->term_id;

$positionC = array_search($termC, $ids);
$prev_term = $positionC - 1;
if($prev_term >= 0) {
    $prevTerm = get_term($ids[$prev_term], $taxonomy);
    if($prevTerm) {
        echo '';
    }
}
?>


<!-- <div class="breadcrumbs__inner">
    <ul class="breadcrumbs__list mobile__overvlou">
        <li class="breadcrumbs__list-item">
            <a href="#">Главная</a>
        </li>
        <li class="breadcrumbs__list-item">
            <a href="#">Овощи</a>
        </li>
    </ul>  
</div> -->