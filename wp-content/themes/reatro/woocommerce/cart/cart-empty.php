<?php
/**
 * Empty cart page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<p class="woocommerce-info"><?php _e( 'Your cart is currently empty.', 'Twoot' ) ?></p>

<?php do_action('woocommerce_cart_is_empty'); ?>

<p><a class="button button-medium button-dark" href="<?php echo get_permalink(woocommerce_get_page_id('shop')); ?>"><?php _e( 'Return To Shop', 'Twoot' ) ?></a></p>