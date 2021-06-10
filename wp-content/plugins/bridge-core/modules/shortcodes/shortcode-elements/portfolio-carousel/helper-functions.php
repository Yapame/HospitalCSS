<?php

if ( ! function_exists( 'bridge_core_add_portfolio_carousel_shortcode' ) ) {
	function bridge_core_add_portfolio_carousel_shortcode( $shortcodes_class_name ) {
		$shortcodes = array(
			'Bridge\Shortcodes\PortfolioCarousel\PortfolioCarousel'
		);
		
		$shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );
		
		return $shortcodes_class_name;
	}
	
	add_filter( 'bridge_core_filter_add_vc_shortcode', 'bridge_core_add_portfolio_carousel_shortcode' );
}