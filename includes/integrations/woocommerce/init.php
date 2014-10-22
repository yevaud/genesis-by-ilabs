<?php

// Declare Genesis Connect for WooCommerce support
add_theme_support( 'genesis-connect-woocommerce' );

// Check if WooCommerce is activated
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
	}
}

require_once( 'admin/admin-views.php' );
