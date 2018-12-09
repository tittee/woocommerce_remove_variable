<?php
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'removing_variable_add_to_cart_template', 3 );
function removing_variable_add_to_cart_template(){
    global $product;

    // Only for variable products
    if( $product->is_type( 'variable' ) ){
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
    }
}
