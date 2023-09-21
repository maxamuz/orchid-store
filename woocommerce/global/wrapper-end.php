<?php
/**
 * Content wrappers
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/wrapper-end.php.
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
	exit; // Exit if accessed directly
}
?>


							</div><!-- .__os-woo-entry__ -->
                        </div><!-- #main.site-main -->
                    </div><!-- #primary.content-area -->
                </div><!-- .col -->
                <?php 
                if( is_active_sidebar( 'woocommerce-sidebar' ) ) {

                	orchid_store_get_woocommerce_sidebar();
                } else {
                	get_sidebar();
                } 
                ?>
            </div><!-- .row -->
        </div><!-- .__os-container__ -->

	<div class="forma-bottom-catalog">
		<div class="__os-container__">
				<div class="row">
					
					<div class="width-40">
						<img src="/wp-content/uploads/2021/10/iStock-184399586-ed-1.png">
						</div>
					<div class="width-60">
						<h3 class="orange-header-form">
						Быстрый заказ
					</h3>
						<?php echo do_shortcode('[contact-form-7 id="214" title="1"]'); ?>
					</div>
				</div>
		</div>
	</div>

    </div><!-- .inner-entry -->
</div><!-- .inner-page-wrap -->