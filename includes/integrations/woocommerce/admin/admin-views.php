<?php

//add_action( 'admin_menu', 'ilabs_remove_woocommerce_menus', 999 );
/**
 * Remove WooCommerce menus
 *
 * @since 1.0
 */
// 
function ilabs_remove_woocommerce_menus() {
	remove_submenu_page( 'woocommerce' ,'wc-addons' ); // Remove WooCommerce/Extensions
	remove_submenu_page( 'woocommerce' ,'wc-reports' ); // Remove WooCommerce/Reports
	remove_submenu_page( 'edit.php?post_type=product', 'edit-tags.php?taxonomy=product_shipping_class&amp;post_type=product' ); // Remove Products/Shipping Classes
}

//add_filter( 'woocommerce_enqueue_styles', 'ilabs_dequeue_woocommerce_styles' );
/**
 * Remove WooCommerce style one by one
 *
 * @since 1.0
 */
function ilabs_dequeue_woocommerce_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] ); // Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] ); // Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] ); // Remove the smallscreen optimisation
	
	return $enqueue_styles;
}

/**
 * Disable all WooCommerce stylesheets
 *
 * @since 1.0
 */
//add_filter( 'woocommerce_enqueue_styles', '__return_false' );
