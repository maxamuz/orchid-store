<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>




<?php if($product->get_attribute('proizvoditelnost') != 0){ ?> 
<div class="text-attribute-cat">
Производительность:  <?php 
echo $product->get_attribute('proizvoditelnost'); ?> 
</div>
<?php } ?>

<?php if($product->get_attribute('davlenie') != 0){ ?> 
<div class="text-attribute-cat">
Давление:  <?php 
echo $product->get_attribute('davlenie'); ?> 
</div>
<?php } ?>

<?php if($product->get_attribute('moshnost') != 0){ ?> 
<div class="text-attribute-cat">
Мощность:  <?php 
echo $product->get_attribute('moshnost'); ?> 
</div>
<?php } ?>

<?php if($product->get_attribute('privod') != 0){ ?> 
<div class="text-attribute-cat">
Привод: <?php 
echo $product->get_attribute('privod'); ?> 
</div>
<?php } ?>



<?php if ( $price_html = $product->get_price_html() ) : ?>
	<span class="price"><?php echo $price_html; ?></span>
<?php endif; ?>
