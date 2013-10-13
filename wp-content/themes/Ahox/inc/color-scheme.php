<?php 
//color scheme
function rdn_color_scheme() {
        $color =  ot_get_option( 'color_scheme_theme' );
        $custom_css = "
		.bx-wrapper .bx-viewport,.slider-description,.bx-wrapper .bx-pager.bx-default-pager a:hover, .bx-wrapper .bx-pager.bx-default-pager a.active,.menu-inner li:hover ,.menu-inner .sub-menu,.social-icon ul li a,.post-meta,.mask-inner a,.link-image a p i,.pagination a,.widget .slickr-flickr-gallery img:hover,#toTop:hover,.comments #submit:hover,.post-pagination a:hover,.menu-btn,.read-more{
		background: $color;
		}
		a,.logo-inner p,.post-title a,.widgettitle,.widget .srp-widget-title,.post-page .post-title h3,.fn{
			color:$color;
		}
		.wpcf7-submit:hover{background:$color !important;}.bordering{border-color:$color;}
		
		
		";   
		if ( function_exists( 'ot_get_option' ) && ot_get_option( 'color_scheme_theme' )) {           
        wp_add_inline_style( 'custom-style', $custom_css );
		}
		 
}