<?php get_header(); ?>

    <!--slider only show at first page-->
    <?php  if (is_front_page() && !is_paged() ){ ?>
        <?php if ( function_exists( 'ot_get_option' ) ) : if (ot_get_option( 'slider_home')) :?>
        <div class="container">
            <ul class="slider">
            <?php
                wp_enqueue_script( 'rdn_slider_home', get_template_directory_uri() . '/js/slider-home.js',array(),'', 'in_footer');
                /* get the slider array */
                $slides = ot_get_option( 'slider_home', array() );
                
                if ( ! empty( $slides ) ) {
                    foreach( $slides as $slide ) {
                        echo '
                  <li>
                    <img src="' . $slide['image'] . '" alt="' . $slide['title'] . '" />
                    <div class="slider-description">
                        <a href="' . $slide['link'] . '" >
                        <h3>' . $slide['title'] . '</h3>
                        <p>' . $slide['description'] . '</p>
                        </a>
                    </div>
                  </li>';
                    }
        
                }
        
                ?>
            </ul>
        </div><!--/container-->
        <?php endif ; endif; ?>
    <?php } ?>             
	<div class="spacing40 clearfix"></div>
	<div class="container">   
		<div class="row">
        	<div class="span8">
            	<?php while (have_posts()) : the_post(); ?>
                	<?php  if ( has_post_format( 'video' )) { ?>
                    <article id="post-<?php  the_ID(); ?>" <?php  post_class('clearfix post-content'); ?>>
                        <div class="video clearfix">
                            <?php echo apply_filters('the_content', get_post_meta($post->ID, 'embed_post', true)); ?>
                        </div> 
                        <div class="post-inner clearfix"> 
                            <div class="post-title clearfix">
                            	<a href="<?php the_permalink(); ?>"><h3><?php the_title (); ?></h3></a>
                            </div><!--/.post-title-->
                            <div class="bordering clearfix"></div>
                            <?php the_excerpt() ; ?>
                            <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                        </div><!--/.post-inner-->
                        <div class="post-meta">
                            <div><i class="icon-film"></i><span><?php the_time('d/m/Y'); ?></span></div>
                            <div><i class="icon-user"></i><span><?php the_author(); ?></span></div> 
                            <div><i class="icon-file-text-alt"></i><ul class="post-categories"><li><?php the_category('</li><li>'); ?></li></ul> </div> 
                        </div><!--/.post-meta--> 
                    </article><!--/.post-content-->
                          
					<?php } else if ( has_post_format( 'audio' )) { ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix post-content'); ?>> 
                        <div class="audio clearfix">
                            <?php echo apply_filters('the_content', get_post_meta($post->ID, 'embed_post', true)); ?>
                        </div><!--/.audio-->
                        <div class="post-inner clearfix"> 
                            <div class="post-title clearfix">
                            <a href="<?php the_permalink(); ?>"><h3><?php the_title (); ?></h3></a>
                            </div><!--/.post-title-->
                            <div class="bordering clearfix"></div>
                            <?php the_excerpt() ; ?>
                            <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                        </div><!--/.post-inner-->
                        <div class="post-meta">
                            <div><i class="icon-headphones"></i><span><?php the_time('d/m/Y'); ?></span></div>
                            <div><i class="icon-user"></i><span><?php the_author(); ?></span></div> 
                            <div><i class="icon-file-text-alt"></i><ul class="post-categories"><li><?php the_category('</li><li>'); ?></li></ul> </div> 
                        </div><!--/.post-meta-->
                    </article><!--/.post-content-->
                    
					<?php } else if ( has_post_format( 'quote' )) { ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix quote'); ?>>
                        <i class="icon-quote-right"></i> 
                        <blockquote>
                            <?php the_content(); ?>
                            <small><?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'quote_author', true)); ?></small>
                        </blockquote>
                        <i class="icon-quote-left right-icon"></i> 
                    </article><!--/.quote--> 
                    
					<?php } else if ( has_post_format( 'link' )) { ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix link'); ?>>
                        <div class="link-image clearfix">
                            <?php $linkcode = apply_filters('get_the_content', get_post_meta($post->ID, 'link_post_url', true)); ?>
                            <a href="<?php echo $linkcode ?>" target="_blank">
                            <div class="image-link"><?php the_post_thumbnail(); ?></div>
                            <p><i class="icon-heart-empty"></i> <?php echo $linkcode ?></p>
                            </a>
                        </div><!--/.link-image-->  
                        <div class="post-inner clearfix"> 
                            <div class="post-title clearfix">
                            	<a href="<?php the_permalink(); ?>"><h3><?php the_title (); ?></h3></a>
                            </div><!--/.post-title-->
                            <div class="bordering clearfix"></div>
                            <?php the_excerpt() ; ?>
                            <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                        </div><!--/.post-inner-->
                        <div class="post-meta">
                            <div><i class="icon-link"></i><span><?php the_time('d/m/Y'); ?></span></div>
                            <div><i class="icon-user"></i><span><?php the_author(); ?></span></div> 
                            <div><i class="icon-file-text-alt"></i><ul class="post-categories"><li><?php the_category('</li><li>'); ?></li></ul> </div> 
                        </div><!--/.post-meta--> 
                    </article><!--/.link-->   
                          
					<?php } else if ( has_post_format( 'aside' )) { ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix aside-body'); ?>>
                        <div class="image-aside"><?php the_post_thumbnail(); ?></div>
                        <aside class="aside">
                            <div class="aside-title clearfix">
                            	<a href="<?php the_permalink(); ?>"><h3><?php the_title (); ?></h3></a>
                            </div><!--/.post-title--> 
                            <div class="bordering clearfix"></div>
                            <?php the_content(); ?>
                        </aside><!--/.aside-->
                    </article><!--/.aside-body-->  
                               
					<?php } else if ( has_post_format( 'gallery' )) { ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix gallery-content'); ?>>
                        <div class="post-image clearfix">
                            <?php echo apply_filters('the_content', get_post_meta($post->ID, 'gallery_post', true)); ?>
                        </div><!--/.post-image-->
                        <div class="post-inner clearfix"> 
                            <div class="post-title clearfix">
                            	<a href="<?php the_permalink(); ?>"><h3><?php the_title (); ?></h3></a>
                            </div><!--/.post-title-->
                            <div class="bordering clearfix"></div>
                            <?php the_excerpt(); ?>
                            <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                        </div><!--/.post-inner-->
                        <div class="post-meta">
                            <div><i class="icon-picture"></i><span><?php the_time('d/m/Y'); ?></span></div>
                            <div><i class="icon-user"></i><span><?php the_author(); ?></span></div> 
                            <div><i class="icon-file-text-alt"></i><ul class="post-categories"><li><?php the_category('</li><li>'); ?></li></ul> </div> 
                        </div> 
                    </article><!--/.gallery-content-->
                             
					<?php } else { ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix post-content'); ?>>
                        <div class="post-image clearfix">
							<?php the_post_thumbnail(); ?>
                            <div class="mask-post">
                                <div class="mask-inner">
                                    <a title ="<?php the_title (); ?>" href="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false, ''); echo $src[0]; ?>" 
                                    data-rel="prettyPhoto">
                                    <i class="icon-search"></i>
                                    </a> 
                                    <!-- a title ="View Post" href="<?php the_permalink(); ?>"><i class="icon-paper-clip"></i></a -->
                                </div><!--/.mask-inner-->
                            </div><!--/.mask-post-->
                        </div><!--/.post-image-->
                        <div class="post-inner clearfix"> 
                            <div class="post-title clearfix">
                            	<a href="<?php the_permalink(); ?>"><h3><?php the_title (); ?></h3></a>
                            </div><!--/.post-title-->
                            <div class="bordering clearfix"></div>
                            <?php the_excerpt() ; ?>
                            <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                        </div><!--/.post-inner-->
                        <div class="post-meta">
                            <div><i class="icon-pencil"></i><span><?php the_time('d/m/Y'); ?></span></div>
                            <div><i class="icon-user"></i><span><?php the_author(); ?></span></div> 
                            <div><i class="icon-file-text-alt"></i><ul class="post-categories"><li><?php the_category('</li><li>'); ?></li></ul> </div> 
                        </div> 
                    </article><!--/.post-content-->
 
                   	<?php  } ?>
                <?php  endwhile; ?>
                <?php  kriesi_pagination(); ?>
        	</div><!--/.span8-->  
            <?php get_sidebar(); ?>
		</div><!--/.row-->
	</div><!--/.container-->

    
<?php  get_footer(); ?>
