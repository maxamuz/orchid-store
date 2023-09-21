<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;
global $product;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

/*if ( ! $short_description ) {
	return;
}*/

?>
<div class="woocommerce-product-details__short-description">
	<?php echo $short_description; // WPCS: XSS ok. ?>
</div>

<div class="characteristic">
	<p>
		<span>Давление: </span><?php echo $product->get_attribute('davlenie'); ?> бар
	</p>
</div>

<div class="characteristic">
	<p>
		<span>Мощность: </span><?php echo $product->get_attribute('moshnost'); ?> кВт
	</p>
</div>

<div class="characteristic">
	<p>
		<span>Производительность: </span><?php echo $product->get_attribute('proizvoditelnost'); ?> л/мин
	</p>
</div>

<p>
	<a href="#tab-title-additional_information" class="buy-on-lease">Больше характеристик </a>
</p>

<div class="flexbox-product">

		<div class="status">
<span>Статус:</span>
		<?php
		    if ( $product->is_in_stock() ) {
        echo '<div class="stock" >' . $product->get_stock_quantity() . ' в наличии</div>';
    } else {
        echo '<div class="out-of-stock" >Нет в наличии</div>';
    }
		?>
						
		</div>
			
			<div class="status">
				<span>Доставка:</span>
				<div class="stock" > <?php the_field('dostavka'); ?></div>
			</div>
						
		</div>
