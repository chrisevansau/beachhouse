<?php
function rdn_theme_styles()  
{ 
  // Register the style like this for a theme:  
  // (First the unique name for the style (custom-style) then the src, 
  // then dependencies and ver no. and media type)
  wp_register_style
    ('bootstrap', 
    get_template_directory_uri() . '/css/bootstrap.min.css', 
    array(), 
    '1', 
    'all' );
  wp_register_style
    ('font-awesome', 
    get_template_directory_uri() . '/css/font-awesome.min.css', 
    array(), 
    '1', 
    'all' );
  wp_register_style
    ('slider-style', 
    get_template_directory_uri() . '/css/jquery.bxslider.css', 
    array(), 
    '1', 
    'all' );
  wp_register_style
    ('pretty-photo', 
    get_template_directory_uri() . '/css/prettyPhoto.css', 
    array(), 
    '1', 
    'all' );
  wp_register_style
    ('custom-style', 
    get_template_directory_uri() . '/style.css', 
    array(), 
    '1', 
    'all' );



  // enqueing:
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('font-awesome');
  wp_enqueue_style( 'slider-style' );
  wp_enqueue_style( 'pretty-photo' );
  wp_enqueue_style( 'custom-style' );
}
add_action('wp_enqueue_scripts', 'rdn_theme_styles');

//google font
    function load_fonts() {
            wp_register_style('MontserratFont', 'http://fonts.googleapis.com/css?family=Montserrat:400,700');
            wp_register_style('RobotoFont', 'http://fonts.googleapis.com/css?family=Roboto:400,700,900');
			wp_enqueue_style( 'MontserratFont');
            wp_enqueue_style( 'RobotoFont');
        }
 
    add_action('wp_enqueue_scripts', 'load_fonts');
	
	

