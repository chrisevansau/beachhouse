<?php
//load all theme jquery script
function rdn_theme_scripts() {
		wp_enqueue_script( 'jquery');	
		wp_enqueue_script( 'rdn_slider', get_template_directory_uri() . '/js/jquery.bxslider.js',array(),'', 'in_footer');
		wp_enqueue_script( 'jquery_easing', get_template_directory_uri() . '/js/jquery.easing.js',array(),'', 'in_footer');
		wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js',array(),'', 'in_footer');
		wp_enqueue_script( 'hoverintent', get_template_directory_uri() . '/js/hoverIntent.js',array(),'', 'in_footer');
		wp_enqueue_script( 'responsive_video', get_template_directory_uri() . '/js/jquery.fitvids.js',array(),'', 'in_footer');
		wp_enqueue_script( 'pretty_photo', get_template_directory_uri() . '/js/jquery.prettyPhoto.js',array(),'', 'in_footer');
		wp_enqueue_script( 'totop_script', get_template_directory_uri() . '/js/jquery.ui.totop.js',array(),'', 'in_footer');
		wp_enqueue_script( 'rdn_customscript', get_template_directory_uri() . '/js/script.js',array(),'', 'in_footer');

}    

add_action('wp_enqueue_scripts', 'rdn_theme_scripts');