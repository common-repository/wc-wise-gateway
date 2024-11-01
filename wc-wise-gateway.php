<?php
/**
 *
 * Plugin Name:          Gateway for Wise on WooCommerce
 * Plugin URI:           https://wordpress.org/plugins/wc-wise-gateway
 * Description:          WooCommerce payment gateway for Wise  
 * Version:              2.2
 * Requires PHP:         7.0
 * Requires at least:    5.0
 * WC requires at least: 3.2
 * WC tested up to:      8.5.2
 * Text Domain:          wc-wise-gateway
 * Domain Path:          /languages
 * Author:               alx359
 * License:              GPL v3 or later
 * License URI:          https://www.gnu.org/licenses/gpl-3.0.html
 *
 */

# no direct page access
defined( 'ABSPATH' ) || exit;

# load main class
# add only with WooCommerce installed 
add_action( 'plugins_loaded', function() {
    if( !class_exists('WooCommerce') ) {
        add_action( 'admin_notices', function() {
            echo '<div class="error"><p>';
            echo sprintf( /* translators: %s: plugin name */
                      __('<b>%s</b> requires of <b>WooCommerce</b> installed and active in order to operate.', 'wc-wise-gateway'), 
                        get_plugin_data( __FILE__ )['Name'] 
                 );
            echo '</p></div>' . PHP_EOL;
        });
    } else {
        include_once plugin_dir_path( __FILE__ ) . 'includes/class-ew-gateway-wise.php';
        add_filter( 'woocommerce_payment_gateways', function( $gateways ){
            if( !array_search('EW_Gateway_Wise', $gateways, true) ) {
                $gateways[] = 'EW_Gateway_Wise';
            }
            return $gateways;
        });
    }
});

#--> HPOS-compatibility ENABLED
add_action( 'before_woocommerce_init', function() {
	if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
		\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
	}
} );
#<--