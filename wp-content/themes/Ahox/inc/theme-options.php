<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'homepage_setting',
        'title'       => 'Main Setting'
      ),
      array(
        'id'          => 'header_social_icon',
        'title'       => 'Social Icon in Header'
      ),
      array(
        'id'          => 'footer_bottom',
        'title'       => 'Footer'
      ),
      array(
        'id'          => 'theme_typography',
        'title'       => 'Font from Google Font'
      ),
      array(
        'id'          => 'theme_coloring',
        'title'       => 'Color'
      ),
      array(
        'id'          => 'custom_styling_theme',
        'title'       => 'Custom Css'
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'website_logo',
        'label'       => 'Website Logo',
        'desc'        => 'Upload your own website logo here.<br /> <small>Recommended height:60px</small>',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'homepage_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'slider_home',
        'label'       => 'Slider Setting',
        'desc'        => 'This is slider setting in homepage',
        'std'         => '',
        'type'        => 'slider',
        'section'     => 'homepage_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'favicon_logo',
        'label'       => 'Favicon Logo',
        'desc'        => 'Upload your own favicon image here.<br /> <small>Recommended size:50pixel x 50pixel</small>',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'homepage_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'touch_logo',
        'label'       => 'Icon Touch',
        'desc'        => 'Upload your icon touch logo here',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'homepage_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'facebook_social_top',
        'label'       => 'Facebook Link',
        'desc'        => 'Insert your facebook link here
<br>
<i>example: http://www.facebook.com/envato</i>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header_social_icon',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'twitter_social_top',
        'label'       => 'Twitter Link',
        'desc'        => 'Add you twitter id here<br>
<i>example :https://twitter.com/envato</i>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header_social_icon',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''

      ),
      array(
        'id'          => 'googleplus_social_top',
        'label'       => 'Google Plus Link',
        'desc'        => 'Add you google plus link here<br>
<i>example :https://plus.google.com/107285294994146126204</i>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header_social_icon',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'linkedin_social_top',
        'label'       => 'Linkedin Link',
        'desc'        => 'Add you linked in link here<br>
<i>example :http://www.linkedin.com/company/envato </i>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header_social_icon',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'pinterest_social_top',
        'label'       => 'Pinterest Link',
        'desc'        => 'Add you pinterest link here<br>
<i>example :http://pinterest.com/envato </i>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header_social_icon',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'instagram_social_top',
        'label'       => 'Instagram Link',
        'desc'        => 'Add you instagram link here<br>
<i>example :http://instagram.com/envato </i>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header_social_icon',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'copyright_text',
        'label'       => 'Copyright text in footer',
        'desc'        => 'Input your copyright text for the footer here',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'footer_bottom',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'heading_font',
        'label'       => 'Heading Font Link',
        'desc'        => 'Find your own font in here http://www.google.com/fonts <br />
Input your google font in here. <br /><small>example:<br />
&lt;<span>link href=\'http://fonts.googleapis.com/css?family=Cinzel+Decorative\' rel=\'stylesheet\' type=\'text/css

\'</span>&gt;</small>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'theme_typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'heading_font_css',
        'label'       => 'Heading Font Font Family',
        'desc'        => 'Add your font family css here. <br /><small>example. font-family: \'Cinzel Decorative\', 

cursive;</small>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'theme_typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'paragraph_font_link',
        'label'       => 'Paragraph Font Link',
        'desc'        => 'Input your google font in here. <br /><small>example:<br />
&lt;<span>link href=\'http://fonts.googleapis.com/css?family=Cinzel+Decorative\' rel=\'stylesheet\' type=\'text/css

\'</span>&gt;</small>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'theme_typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'paragraph_font_family',
        'label'       => 'Paragraph Font Family',
        'desc'        => 'Add your font family css here. <br /><small>example. font-family: \'Cinzel Decorative\', 

cursive;</small>',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'theme_typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'color_scheme_theme',
        'label'       => 'Color Scheme',
        'desc'        => 'Choose color scheme for theme.(default color scheme is red)',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'theme_coloring',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      ),
      array(
        'id'          => 'css_custom_style',
        'label'       => 'Custom css',
        'desc'        => 'Input you custom css styling here',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'custom_styling_theme',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => ''
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}