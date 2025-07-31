<?php

// Impedir acesso direto ao arquivo.
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Registrar o widget no Elementor.
add_action( 'elementor/widgets/register', function( $widgets_manager ) {
    require_once BUY_NOW_ELEMENTOR_PLUGIN_DIR . 'includes/widgets/buy-now-button.php';
    $widgets_manager->register( new \Elementor_Buy_Now_Button() );
});

// Registrar o script do botão Buy Now.
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_script(
        'buy-now-script',
        BUY_NOW_ELEMENTOR_PLUGIN_URL . 'assets/js/buy-now.js',
        [ 'jquery' ],
        '1.0.0',
        true
    );
});
