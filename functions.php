add_action( 'woocommerce_after_shop_loop_item', 'codeithub_show_product_dimensions_loop', 20 );
  
function codeithub_show_product_dimensions_loop() {
   global $product;
   $dimensions = $product->get_dimensions();
   if ( ! empty( $dimensions ) ) {
      echo '<div class="dimensions"><b>Height:</b> ' . $product->get_height() . get_option( 'woocommerce_dimension_unit' );
      echo '<br><b>Width:</b> ' . $product->get_width() . get_option( 'woocommerce_dimension_unit' );
      echo '<br><b>Length:</b> ' . $product->get_length() . get_option( 'woocommerce_dimension_unit' );
      echo '</div>';        
   }
}
