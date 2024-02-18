// Change backend shipping labels
add_filter( 'woocommerce_shipping_package_name', 'custom_shipping_package_name' );
function custom_shipping_package_name( $name ) {
    return 'Delivery';
}

// Change frontend shipping labels
function fix_woocommerce_strings( $translated, $text) {
    // Backend
    $translated = str_ireplace( 'Shipping', 'Delivery', $translated );

    // Frontend
    $translated = str_ireplace( 'Shipping', 'Delivery', $translated );
    $translated = str_ireplace( 'shipping', 'delivery', $translated );
    $translated = str_ireplace( 'SHIP TO', 'DELIVER TO', $translated ); // Specific to checkout page shipping section

    return $translated;
}
add_filter( 'gettext', 'fix_woocommerce_strings', 999, 3 );
