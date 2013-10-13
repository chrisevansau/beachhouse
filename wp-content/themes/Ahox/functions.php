<?php
	// add ie conditional html5 shim to header
	function add_ie_html5_shim () {
		global $is_IE;
		
		if ($is_IE)   echo '<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->';
	}

	add_action('wp_head', 'add_ie_html5_shim');
	//add menu
	function register_rdn_menu() {
		register_nav_menu('header-menu',__( 'Main Menu in Header' ));
	}

	add_action( 'init', 'register_rdn_menu' );
	//THEME SUPORT FUNCTION
	//add thumbnail
	add_theme_support( 'post-thumbnails' );
	//custom background
	add_theme_support( 'custom-background' );
	//post format
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ,'quote', 'video', 'audio' , 'link') );
	//automatic feed
	add_theme_support( 'automatic-feed-links' ).//THEME SCRIPTS & STYLES
	// include theme-script
	include('inc/theme-script.php');
	// include theme-styles
	include('inc/theme-style.php');
	// include pagination
	include('inc/pagination.php');
	//include TGM activation
	include('inc/plugin-install.php');
	include('inc/custom-widget.php');
	/**
 * Replacing the default WordPress search form with an HTML5 version
 *
 */
	function html5_search_form( $form ) {
		$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" > 
    <input type="search" placeholder="'.__("Search and hit enter...").'" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" class="icon-search" />
    </form>';
		return $form;
	}

	add_filter( 'get_search_form', 'html5_search_form' );
	//custom excerpt function
	function rdn_excerpt_length( $length ) {
		return 50;
	}

	add_filter( 'excerpt_length', 'rdn_excerpt_length', 10 );
	// Remove [...]
	
	function trim_excerpt($text) {
		$text = str_replace('[', '', $text);
		$text = str_replace(']', '', $text);
		return $text;
	}

	add_filter('get_the_excerpt', 'trim_excerpt');
	//adding sidebar widget
	
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array('name' => 'Default Sidebar','id' => 'homepage-sidebar','description' => 'Appears as the sidebar on default pages','before_widget' => '<div  id="%1$s" class="widget %2$s clearfix">','after_widget' => '</div>','before_title' => '<h3 class="widgettitle">','after_title' => '</h3>',));
	}

	//adding sidebar widget for single post
	
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array('name' => 'Single Post Sidebar','id' => 'single-sidebar','description' => 'Appears as the sidebar on single post','before_widget' => '<div  id="%1$s" class="widget %2$s clearfix">','after_widget' => '</div>','before_title' => '<h3 class="widgettitle">','after_title' => '</h3>',));
	}

	//adding footer widget
	
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array('name' => 'Footer widget','id' => 'footer-sidebar','description' => 'Appears as the widget area on the footer','before_widget' => '<div class="span4"><div  id="%1$s" class="widget %2$s clearfix">','after_widget' => '</div></div>','before_title' => '<h3 class="widgettitle">','after_title' => '</h3>',));
	}

	//width content
	
	if ( ! isset( $content_width ) )$content_width = 1170;
	//metabox include
	include('inc/custom-meta-boxes.php');
	//comment include
	include('inc/comment-template.php');
	//remove read more link
	function remove_more_jump_link($link) {
		$offset = strpos($link, '#more-');
		
		if ($offset) {
			$end = strpos($link, '"',$offset);
		}

		
		if ($end) {
			$link = substr_replace($link, '', $offset, $end-$offset);
		}

		return $link;
	}

	// Hide post formats from WordPress generated RSS feeds:
	function exclude_post_formats_from_feeds( &$wp_query ) {
		// Only do this for feed queries:
		
		if ( $wp_query->is_feed() ) {
			// Array of post formats to exclude, by slug,
			// e.g. "post-format-{format}"
			$post_formats_to_exclude = array('post-format-status','post-format-quote','post-format-link','post-format-aside');
			// Extra query to hack onto the $wp_query object:
			$extra_tax_query = array('taxonomy' => 'post_format','field' => 'slug','terms' => $post_formats_to_exclude,'operator' => 'NOT IN');
			$tax_query = $wp_query->get( 'tax_query' );
			
			if ( is_array( $tax_query ) ) {
				$tax_query = $tax_query + $extra_tax_query;
			} else {
				$tax_query = array( $extra_tax_query );
			}

			$wp_query->set( 'tax_query', $tax_query );
		}

	}

	// Call the above hook function before every WordPress query:
	add_action( 'pre_get_posts', 'exclude_post_formats_from_feeds' );
	//color scheme
	include('inc/color-scheme.php');
	add_action( 'wp_enqueue_scripts', 'rdn_color_scheme' );
	//adding optiontree into themes
	/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */add_filter( 'ot_show_pages', '__return_false' );
	/**
 * Optional: set 'ot_show_new_layout' filter to false.
 * This will hide the "New Layout" section on the Theme Options page.
 */add_filter( 'ot_show_new_layout', '__return_false' );
	/**
 * Required: set 'ot_theme_mode' filter to true.
 */add_filter( 'ot_theme_mode', '__return_true' );
	/**
 * Required: include OptionTree.
 */load_template( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
	/**
 * Theme Options
 */load_template( trailingslashit( get_template_directory() ) . 'inc/theme-options.php' );