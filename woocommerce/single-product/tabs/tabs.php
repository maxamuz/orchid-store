<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>
<div class="flexbox-2">

	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs" role="tablist">
			<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
				<li class="<?php echo esc_attr( $key ); ?>_tab" id="tab-title-<?php echo esc_attr( $key ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
					<a href="#tab-<?php echo esc_attr( $key ); ?>">
						<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
			<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
				<?php
				if ( isset( $product_tab['callback'] ) ) {
					call_user_func( $product_tab['callback'], $key, $product_tab );
				}
				?>
			</div>
		<?php endforeach; ?>

		<?php do_action( 'woocommerce_product_after_tabs' ); ?>
	</div>

<div class="block-sert">
	<?php //the_field('sertificate'); ?>
	<!--<p style="font-size: 26px; font-weight:700; line-height:1; margin-bottom:30px;">17 лет являемся официальным дилером</p>
<img class="alignnone size-medium wp-image-327" src="/wp-content/uploads/2021/10/diploma-225x300.png" alt="" width="225" height="300" /><img class="alignnone size-medium wp-image-327" src="/wp-content/uploads/2021/10/diploma-225x300.png" alt="" width="225" height="300" />-->
<h2 style="text-align: center;">Почему нам доверяют?</h2>
<ul class="pad-list">
 	<li>Наша компания зарегистрирована в Реестре Минпромторга;</li>
 	<li>Мы одни из первых, кто начал работать с компанией ООО "Арсенал Машиностроение";</li>
 	<li>Мы одни из первых, кто начал поставлять продукцию ЗИФ по России;</li>
 	<li>Мы соблюдаем гарантийные обязательства и оказываем сервисную поддержку;</li>
 	<li>Мы проводим пусконаладочные работы и обучаем персонала заказчика;</li>
 	<li>Наши  специалисты обучаются на заводе-изготовителе в Санкт-Петербурге;</li>
 	<li>У нас самая гибкая ценовая политика и условия поставки.</li>
</ul>
<h2 style="text-align: center;">Сертификат:</h2>
&nbsp;
<p style="text-align: center;"><a href="http://zif.loc/wp-content/uploads/2021/11/0.jpg"><img class="alignnone wp-image-5640 size-large" src="http://zif.loc/wp-content/uploads/2021/11/0-1024x729.jpg" alt="" width="640" height="456" /></a></p>
&nbsp;
</div>	
</div>

<?php endif; ?>
