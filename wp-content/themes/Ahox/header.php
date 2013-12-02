<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <title><?php if(is_home()) { echo bloginfo("name"); echo " - "; echo bloginfo("description"); } else { echo wp_title(" - ", false, 'right'); echo bloginfo("name"); } ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta name="author" content="<?php the_author_meta('display_name', 1); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <!--  Favicon -->
    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'favicon_logo')) :  ?>
    <link rel="shortcut icon" href="<?php echo ot_get_option( 'favicon_logo'); ?>"/>
    <?php  else :  ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
    <?php endif ; endif; ?>
    <!--  Icon Touch -->
    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'touch_logo')) :  ?>
    <link rel="apple-touch-icon" href="<?php echo ot_get_option( 'touch_logo'); ?>"/>
    <?php  else :  ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon-touch.png" />
    <?php endif ; endif; ?>
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>

	<!--manual setting for google font--> 
    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'heading_font')) :  echo ot_get_option( 'heading_font' ); endif ; endif; ?>
    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'heading_font_css')) :   ?>
    <style type="text/css">h1, h2, h3, h4, h5, h6{<?php echo ot_get_option( 'heading_font_css' ); ?> }</style>
    <?php endif ; endif; ?>
    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'paragraph_font_link')) :  echo ot_get_option( 'paragraph_font_link' ); endif ; endif; ?>
    <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'paragraph_font_family')) :   ?>
    <style type="text/css">body{<?php echo ot_get_option( 'paragraph_font_family' ); ?> }</style>
    <?php endif ; endif; ?>

     <section id="header" class="clearfix">    
     	<div class="container menu">
        	<div class="row">
                <div class="span8 menu-inner">
                <img src="/wp-content/uploads/2013/10/bh-logo.png" class="logo_dt" title="Beach House">
					<?php wp_nav_menu( array( 'items_wrap' => '<ul id="%1$s" class="nav-collapse %2$s">%3$s</ul>', 'theme_location' => 'header-menu' ) ); ?>
                </div><!--/.menu-inner-->
                <div class="social-icon span4">
                	<div class="menu-btn" data-toggle="collapse" data-target=".nav-collapse"><i class="icon-list"></i></div>
                	<ul>
                    	<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'facebook_social_top')) :   ?>
                        	<li><a href='<?php echo ot_get_option( 'facebook_social_top' ); ?>' target="_blank"><i class='icon-facebook'></i></a></li>
                        <?php endif ; endif; ?>
                    	
                        <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'twitter_social_top')) :   ?>
                        	<li><a href='<?php echo ot_get_option( 'twitter_social_top' ); ?>' target="_blank"><i class='icon-twitter'></i></a></li>
                        <?php endif ; endif; ?>
                        <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'googleplus_social_top')) :   ?>
                        	<li><a href='<?php echo ot_get_option( 'googleplus_social_top' ); ?>' target="_blank"><i class='icon-google-plus'></i></a></li>
                        <?php endif ; endif; ?>
                        <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'linkedin_social_top')) :   ?>
                        	<li><a href='<?php echo ot_get_option( 'linkedin_social_top' ); ?>' target="_blank"><i class='icon-linkedin'></i></a></li>
                        <?php endif ; endif; ?>
                        <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'pinterest_social_top')) :   ?>
                        	<li><a href='<?php echo ot_get_option( 'pinterest_social_top' ); ?>' target="_blank"><i class='icon-pinterest'></i></a></li>
                        <?php endif ; endif; ?>
                        <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'instagram_social_top')) :   ?>
                        	<li><a href='<?php echo ot_get_option( 'instagram_social_top' ); ?>' target="_blank"><i class='icon-instagram'></i></a></li>
                        <?php endif ; endif; ?>
                    </ul>
                </div><!--/.social-icon-->
        	</div><!--/.row-->
     	</div><!--/.container-->
        <div class="logo-inner container">
        	<div class="logo-box">
            	
                <?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'website_logo')) :  ?>
					<a  href=" <?php  echo home_url(); ?> "><img src='<?php echo ot_get_option( 'website_logo' ); ?>' alt='logo'></a>
                <?php  else :  ?>
                	<a  href=" <?php  echo home_url(); ?> "><img src="<?php echo get_template_directory_uri().'/images/logo.png' ?>" alt="logo"/></a>
				<?php endif ; endif; ?>
                <p><?php bloginfo('description'); ?></p>
            </div><!--/.logo-box-->
            <div class="border-logo"></div>
     	</div><!--/.logo-->       
     </section><!--/header-->
     
     
