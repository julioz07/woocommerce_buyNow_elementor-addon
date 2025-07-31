(function($) {
    $(document).on('click', '.buy-now-button', function(e) {
        e.preventDefault();

        var button = $(this);
        var productId = button.data('product-id');
        var checkoutUrl = button.data('checkout-url');

        // Limpar o carrinho
        $.ajax({
            url: '/?wc-ajax=clear_cart',
            method: 'POST',
            success: function() {
                // Adicionar o produto ao carrinho
                $.ajax({
                    url: '/?wc-ajax=add_to_cart',
                    method: 'POST',
                    data: {
                        product_id: productId
                    },
                    success: function() {
                        // Redirecionar para o checkout
                        window.location.href = checkoutUrl;
                    }
                });
            }
        });
    });
})(jQuery);
