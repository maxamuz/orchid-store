<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

 
// Определение ID категории товара

$term_lists = wp_get_post_terms($post->ID,'product_cat', array('fields' => 'ids') );
if( $term_lists ){
	$term_list = array_shift( $term_lists );

	// теперь можно можно вывести название термина
	print_r($term_list);
}



/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="header-product">
		<h1>
			<?php the_title(); ?>
		</h1>
	</div>
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 20
		 * @hooked woocommerce_template_single_excerpt - 10
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>

		<div class="servise_order">
			<div class="to_order">
				<a href="#" class="to_order_buttom">Заказать обслуживание</a>
			</div>
			<?php if ($term_list !== 50): ?>
			<div class="to_spares">
				<a href="<?php if($term_list == 58) { ?>
					http://zif.loc/product-tag/zapchasry_zif_shv/
				<?php } ?> <?php if ($term_list == 576 or $term_list == 43) { ?>
					http://zif.loc/product-tag/zapchasty_zif_sve/
				<?php }?> <?php if ($term_list == 19) { ?>
					http://zif.loc/product-tag/zapchasty_zif_pv/
				<?php }?>" class="to_spares_buttom">Подобрать запчасти</a>
			</div>
			<?php endif; ?>
		</div>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
	
	
	
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>

