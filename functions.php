<?php
	function get_navigation() {
	$templates = array();
	$templates[] = 'navigation.php';

	locate_template( $templates, TRUE);
	}

	function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support');



 
	add_action('wp_enqueue_scripts', 'timber_style');
	add_action('wp_enqueue_scripts', 'timber_scripts');
	
	function timber_style() {
	 wp_enqueue_style('fonts-style', get_template_directory_uri() . '/css/fonts.css');
		wp_enqueue_style('ion-style', get_template_directory_uri() . '/css/ion.rangeSlider.min.css');
		wp_enqueue_style('click-style', get_template_directory_uri() . '/css/click.css');
		wp_enqueue_style('main-style', get_stylesheet_uri( ));
		wp_enqueue_style('media-style', get_template_directory_uri() . '/css/media.css');
	}
	function timber_scripts() {
		wp_enqueue_script('ion-script', get_template_directory_uri() . '/js/ion.rangeSlider.min.js', array(jquery), 'null', true);
		wp_enqueue_script('click-script', get_template_directory_uri() . '/js/slick.min.js', array(jquery), 'null', true);
		wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array(jquery), 'null', true);
	}	

	function my_options() {
		add_settings_field( 'my_phone', 'Телефон', 'display_phone', 'discussion');
		register_setting('discussion', 'my_phone');
	}
		function display_phone() {
			echo '<input type="text" class="menu__link phone" name="my_phone" value="'.esc_attr(get_option('my_phone')).'">';
		}
		add_action('admin_menu', 'my_options');
		add_filter('woocommerce_enqueue_style', '__return_empty_array');

		register_nav_menus(array(
		'header' => 'Шапка',
		'top' =>'Верхнее',
		'bottom' =>'Меню футер'
		));
	
	function woocommerce_template_loop_product_thumbnail() {
	if(!is_shop()){ ?>
	
	<div class="product-item" >
	<?php 
	echo magazin_get_product_thumbnail(); ?>
	<p class="product-item__hover-text">посмотреть товар</p>
	<?php
	}
	else {
		echo woocommerce_get_product_thumbnail();
		echo '</a><a href="'.get_the_permalink().'" class="product-item__hover-text">посмотреть товар</a>';
	}
}
	
	function woocommerce_shop_loop_item_title() {
		if(!is_shop()){
			echo '<h4 class="product-item__title">
            '.get_the_title().'
        </h4>';
		}
		else{
			echo '<a href="'.get_the_permalink().'" class="item_name product-item__title"><h4>'.get_the_title().'</h4></a>';
		}
		
	}

	
function change_sale_flash() {
	$html = '<a href="'.get_the_permalink().'" class="product-item product-item--sale">SALE</a>';
	return $html;
}
add_filter('woocommerce_sale_flash','change_sale_flash');

function myTempl_widgets_init() {
	register_sidebar(array(
		'name' => 'Footer menu',
		'id' => 'footer',
		'description' => ' Блок для отображения футера',
		'before_widget' => '',
		'after_widget' => ''
	));
}
add_action('widgets_init', 'myTempl_widgets_init');

add_action('wp_enqueue_scripts', 'load_script', 9);
function load_script() {
	wp_enqueue_script('wc-add-to-cart', get_template_directory_uri().'/js/add-to-cart.js', WC_VERSION, true);
}

if(!is_shop()){
	remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open');
	add_action('woocommerce_before_shop_loop_item', 'magazin_loop_product_link_open', 10);
}
	function magazin_loop_product_link_open() {
		echo '<a href="'.get_the_permalink().'" class="product-item__wrapperr">';
	}


	if ( ! function_exists( 'magazin_get_product_thumbnail' ) ) {

		/**
		 * Get the product thumbnail, or the placeholder if not set.
		 *
		 * @subpackage	Loop
		 * @param string $size (default: 'shop_catalog')
		 * @param int $deprecated1 Deprecated since WooCommerce 2.0 (default: 0)
		 * @param int $deprecated2 Deprecated since WooCommerce 2.0 (default: 0)
		 * @return string
		 */
		function magazin_get_product_thumbnail( $size = 'shop_catalog', $deprecated1 = 0, $deprecated2 = 0 ) {
			global $post;
			$image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );
	
			if ( has_post_thumbnail() ) {
				$props = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
				return get_the_post_thumbnail( $post->ID, $image_size, array(
					'class'	 => 'product-item__img',
					'alt'    => $props['alt'],
				) );
			} elseif ( wc_placeholder_img_src() ) {
				return wc_placeholder_img( $image_size );
			}
		}
	}

	function change_rub_sumbol() {
		return 'руб';
	}
	add_filter ('woocommerce_currency_symbol', 'change_rub_sumbol');
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
	remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
	add_action( 'woocommerce_before_shop_loop', 'woocommerce_pagination', 35);

	add_filter('woocommerce_breadcrumb_defaults','change_breadcrumb_args');
	function change_breadcrumb_args() {
		return array(
			'delimiter' => '&nbsp;&#47;&nbsp;',
			'wrap_before' => '<div class="breadcrumbs"><div class="container">',
			'wrap_after' => '  </div></div>',
			'before' => '<li class="breadcrumbs__list-item">',
			'after' => '</li>',
			'home'  => _x('Home', 'breadcrumb', 'woocommerce')
		);
	}





add_filter('loop_shop_per_page', 'new_loop_shop_per_page');
function new_loop_shop_per_page($cols) {
	$cols = 12;
	return $cols;
}


add_action('get_header', 'product_page_one');
function product_page_one() {
	if(is_product()){
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
	add_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 70);
	remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);

	}
}

if ( ! function_exists( 'cart_link' ) ) {
	function cart_link() {
		?>
		<a class="cart-contents" href="cart/" title="<?php _e( 'Перейти в корзину' ); ?>">
		<i class="fa fa-shopping-cart"></i>
		<?php name_item_in_cart_count(); ?>
		</a> 
		<?php
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<a class="cart-contents" href="cart/" title="<?php _e( 'Перейти в корзину' ); ?>">
	<i class="fa fa-shopping-cart"></i><?php name_item_in_cart_count(); ?>
	</a> 
	<?php
	$fragments['a.cart-contents'] = ob_get_clean();
	return $fragments;
}
function name_item_in_cart_count() {
	global $woocommerce;
	$product_ids = array();
	foreach(WC()->cart->get_cart() as $cart_item_key => $values) { $product_ids[] = $values['product_id']; }
	$product_ids_unique = array_unique($product_ids);
	echo count($product_ids_unique);
}
add_filter( 'woocommerce_countries',  'truemisha_add_new_country' );
 
function truemisha_add_new_country( $countries ) {
 
	$new_countries = array(
		'PMR' => 'Приднестровье',
	);
 
	return array_merge( $countries, $new_countries );
}



	add_filter( 'woocommerce_states', 'new_rus_woocommerce_states' );

function new_rus_woocommerce_states( $states ) {

$states['RU'] = array(
	'BEN' => 'Бендеры',
	'GIS' => 'Гиска',
	'PRO' => 'Протягайловка',
	'PAR' => 'Парканы',
	'TER' => 'Терновка',
	'TIP' => 'Тирасполь',
);

return $states;
}

 

?>