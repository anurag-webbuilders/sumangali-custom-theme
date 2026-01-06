<?php
function sumangali_setup() {
    // Adds WooCommerce support so products work in your custom code
    add_theme_support( 'woocommerce' ); 
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'sumangali_setup' );
