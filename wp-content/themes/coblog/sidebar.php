<aside id="secondary" class="widget-area">
    <h2 class="coblog-widget-title"></h2>
	 <?php
	 $sidebar = false;
	 if( is_wc_active() ){
		if( is_shop() || is_product_category() || is_product_tag() ) {
			$sidebar = true;
			if( is_active_sidebar('woocommerce-sidebar-area') ){
				dynamic_sidebar( 'woocommerce-sidebar-area' );
			}
		} else {
			if( is_product() ){
				$sidebar = true;
				if( is_active_sidebar('woocommerce-single-area') ){
					dynamic_sidebar( 'woocommerce-single-area' );
				}
			}
		}
	 }
	 
	 if (!$sidebar) {
		if(is_active_sidebar('sidebar-1')){
			dynamic_sidebar( 'sidebar-1' );
		}
	 }
	 ?>
</aside><!-- #secondary -->
