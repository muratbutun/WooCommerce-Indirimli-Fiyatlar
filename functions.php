add_filter( 'woocommerce_get_price_html', 'muratbutun_fiyat_format', 10, 2 );
 function muratbutun_fiyat_format( $price, $product ) {
     
    if ( $product->is_on_sale() && $product->is_type('simple') ) {
        $price = sprintf( __( '<div class="indirimli-fiyat"><div class="satis-fiyati">Satış Fiyatı %1$s</div><div class="suanki-fiyat">Şuanki Fiyatı %2$s</div><div class="kazanciniz">Kazancınız %3$s</div></div>', 'woocommerce' ), wc_price ( $product->get_regular_price() ), wc_price( $product->get_sale_price() ), wc_price( $product->get_regular_price() - $product->get_sale_price() )  );        
    }
     
    return $price;
}
