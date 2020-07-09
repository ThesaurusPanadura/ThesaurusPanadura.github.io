<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
		<?php the_custom_logo();?>
		
			<div class="custom-logo-link-url">
	    	<h1 class="site-title"><a class="site-title-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" ><?php bloginfo( 'name' ); ?></a>
	    	</h1>
	    	<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; ?></p>
			<?php endif; ?>
			</div>
		
	
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'honeypress'); ?>">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<div class="ml-auto">
		<?php 
		 $shop_button = '<ul class="nav navbar-nav mr-auto">%3$s';
		 if ( class_exists( 'WooCommerce' ) ) {
			$shop_button .= '<li class="nav-item"><div class="cart-header">';
					global $woocommerce; 
					$cart_link = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : $woocommerce->cart->get_cart_url();
					$shop_button .= '<a class="cart-icon" href="'.esc_url($cart_link).'" >';
					
					if ($woocommerce->cart->cart_contents_count == 0){
							$shop_button .= '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
						}
						else
						{
							$shop_button .= '<i class="fa fa-cart-plus" aria-hidden="true"></i>';
						}
						   
						$shop_button .= '</a>';
						
						$shop_button .= '<a href="'.esc_url($cart_link).'" ><span class="cart-total">
							'.sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'honeypress'), $woocommerce->cart->cart_contents_count).'</span></a>';
						}
			$shop_button .= '</ul>';

			$menu_class='';
			 wp_nav_menu( array
	            (
	            'theme_location'=> 'honeypress-primary', 
	            'menu_class'    => 'nav navbar-nav mr-auto '.$menu_class.'',
	           'items_wrap'  => $shop_button,
	            'fallback_cb'   => 'honeypress_fallback_page_menu',
	            'walker'        => new Honeypress_nav_walker()
	            )); 				
	        ?>  
		</div>
		</div>
	</div>
</nav>