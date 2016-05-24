<?php
/**
 * BoldGrid functions and definitions
 *
 * @package BoldGrid
 */
/**
 * Add Theme framework configuration
 */
require_once get_template_directory(  ) . '/inc/boldgrid-theme-framework-config/config.php';

/**
 * Include the BoldGrid Theme Framework
 */
require_once get_template_directory(  ) . '/inc/boldgrid-theme-framework/boldgrid-theme-framework.php';

/**
 * Declare WooCommerce.
 */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}








