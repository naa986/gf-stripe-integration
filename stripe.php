<?php
/**
 * Plugin Name: Gravity Forms Stripe Integration
 * Plugin URI: https://noorsplugin.com/
 * Description: Integrates Gravity Forms with Stripe, enabling end users to purchase goods and services through Gravity Forms.
 * Version: 1.0.1
 * Author: naa986
 * Author URI: https://noorsplugin.com/
 * Text Domain: gf-stripe-integration
 * Domain Path: /languages
 */

define( 'GF_STRIPE_VERSION', '1.0.1' );

add_action( 'gform_loaded', array( 'GF_Stripe_Bootstrap', 'load' ), 5 );

class GF_Stripe_Bootstrap {

	public static function load(){

		if ( ! method_exists( 'GFForms', 'include_payment_addon_framework' ) ) {
			return;
		}

		require_once( 'class-gf-stripe.php' );

		GFAddOn::register( 'GFStripe' );
	}

}

function gf_stripe(){
	return GFStripe::get_instance();
}