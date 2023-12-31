<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$mobile_cols_no = get_theme_mod( 'orchid_store_field_product_cols_in_mobile', 1 );

$mobile_col_class = 'os-mobile-col-' . $mobile_cols_no;

if ( is_tax() ): ?>






<a href="#" class="transparent-button" id="open-filter">Фильтр</a>

<div style="width:100%;">
	<?php // echo do_shortcode('[woo_tags]'); ?>
</div>

<div class="filter-block">
	<?php dynamic_sidebar( 'true_side' ); ?>
</div>

<?php endif; ?>



<ul class="products block-prod-cat columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?> <?php echo esc_attr( $mobile_col_class);  ?>">
