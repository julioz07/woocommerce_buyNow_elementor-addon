<?php
/**
 * Plugin Name: Buy Now Elementor Button
 * Description: Adiciona um botão personalizado ao Elementor para comprar produtos diretamente.
 * Version: 0.1.1
 * Author: Júlio Rodrigues
 * Author URI: https://www.linkedin.com/in/juliocesarrodrigues07/
 */

/**
 * Autor: Júlio Rodrigues
 * LinkedIn: https://www.linkedin.com/in/juliocesarrodrigues07/
 * Versão: 0.1.1
 */

// Impedir acesso direto ao arquivo.
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Definir constantes do plugin.
define( 'BUY_NOW_ELEMENTOR_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'BUY_NOW_ELEMENTOR_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Carregar o arquivo principal do plugin.
require_once BUY_NOW_ELEMENTOR_PLUGIN_DIR . 'includes/main.php';
