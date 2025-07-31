<?php

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class Elementor_Buy_Now_Button extends Widget_Base {

    public function get_name() {
        return 'buy_now_button';
    }

    public function get_title() {
        return __( 'Buy Now Button', 'buy-now-elementor' );
    }

    public function get_icon() {
        return 'eicon-button';
    }

    public function get_categories() {
        return [ 'general' ];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'buy-now-elementor' ),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'button_text',
            [
                'label' => __( 'Button Text', 'buy-now-elementor' ),
                'type' => Controls_Manager::TEXT,
                'default' => __( 'Buy Now', 'buy-now-elementor' ),
            ]
        );

        $this->add_control(
            'checkout_page',
            [
                'label' => __( 'Checkout Page URL', 'buy-now-elementor' ),
                'type' => Controls_Manager::URL,
                'placeholder' => __( 'https://yourdomain.com/checkout', 'buy-now-elementor' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $product_id = get_the_ID();
        $checkout_url = $settings['checkout_page']['url'] ? $settings['checkout_page']['url'] : wc_get_checkout_url();

        echo '<a href="#" class="buy-now-button" data-product-id="' . esc_attr( $product_id ) . '" data-checkout-url="' . esc_url( $checkout_url ) . '">' . esc_html( $settings['button_text'] ) . '</a>';
    }

    protected function _content_template() {
        ?>
        <#
        var product_id = settings.product_id || 0;
        var checkout_url = settings.checkout_page.url || '<?php echo wc_get_checkout_url(); ?>';
        #>
        <a href="#" class="buy-now-button" data-product-id="{{ product_id }}" data-checkout-url="{{ checkout_url }}">{{ settings.button_text }}</a>
        <?php
    }
}
