<?php  get_header(); ?>
	<div class="spacing40 clearfix"></div>
	<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<div class="container"><p id="breadcrumbs">','</p></div>');
	} ?>
    
	<div class="container post-page">
        <div class="row">
        	<?php 
            while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('span8'); ?>>
            
                <div class="post-content clearfix">
                            
					<?php if ( has_post_format( 'video' )) { ?>
                    <div class="video clearfix">
                    	<?php echo apply_filters('the_content', get_post_meta($post->ID, 'embed_post', true)); ?>
                    </div> 
                    <div class="post-meta">
                        <div><i class="icon-film"></i><span><?php the_time('d/m/Y'); ?></span></div>
                        <div><i class="icon-user"></i><span><?php the_author(); ?></span></div> 
                        <div><i class="icon-file-text-alt"></i><ul class="post-categories"><li><?php the_category('</li><li>'); ?></li></ul> </div> 
                    </div>
                    <div class="post-inner clearfix">
                        <div class="post-title clearfix">
                        	<h3><?php the_title (); ?></h3>
                        </div><!--/.post-title-->
                        <div class="bordering clearfix"></div>
                        <?php the_content(); ?>
                    </div><!--/.post-inner-->
                    <div class="post-footer clearfix">
                        <div class="tag-area clearfix">
                            <?php the_tags('<i class="icon-tags"></i> ',', ',''); ?> 
                        </div><!--/.tag-area-->
                        <div class="share-area clearfix">
                            <?php if ( function_exists('show_share_buttons') ) {
                            echo do_shortcode('[ssba]');
                            } ?>
                        </div><!--/.share-area-->
                    </div><!--/.post-footer-->
                     
                    <?php } else if ( has_post_format( 'audio' )) { ?>
                    <div class="audio clearfix">
                    	<?php echo apply_filters('the_content', get_post_meta($post->ID, 'embed_post', true)); ?>
                    </div> 
                    <div class="post-meta">
                        <div><i class="icon-headphones"></i><span><?php the_time('d/m/Y'); ?></span></div>
                        <div><i class="icon-user"></i><span><?php the_author(); ?></span></div> 
                        <div><i class="icon-file-text-alt"></i><ul class="post-categories"><li><?php the_category('</li><li>'); ?></li></ul> </div> 
                    </div>
                    <div class="post-inner clearfix">
                        <div class="post-title clearfix">
                        	<h3><?php the_title (); ?></h3>
                        </div><!--/.post-title-->
                        <div class="bordering clearfix"></div>
                        <?php the_content(); ?>
                    </div><!--/.post-inner-->
                    <div class="post-footer clearfix">
                        <div class="tag-area clearfix">
                            <?php the_tags('<i class="icon-tags"></i> ',', ',''); ?> 
                        </div><!--/.tag-area-->
                        <div class="share-area clearfix">
                            <?php if ( function_exists('show_share_buttons') ) {
                            echo do_shortcode('[ssba]');
                            } ?>
                        </div><!--/.share-area-->
                    </div><!--/.post-footer-->
                    
                    <?php } else if ( has_post_format( 'gallery' )) { ?>
                   	<div class="post-image clearfix">
                        <?php echo apply_filters('the_content', get_post_meta($post->ID, 'gallery_post', true)); ?>
                    </div><!--/.post-image-->
                    <div class="post-meta">
                        <div><i class="icon-picture"></i><span><?php the_time('d/m/Y'); ?></span></div>
                        <div><i class="icon-user"></i><span><?php the_author(); ?></span></div> 
                        <div><i class="icon-file-text-alt"></i><ul class="post-categories"><li><?php the_category('</li><li>'); ?></li></ul> </div> 
                    </div>
                    <div class="post-inner clearfix">
                        <div class="post-title clearfix">
                        	<h3><?php the_title (); ?></h3>
                        </div><!--/.post-title-->
                        <div class="bordering clearfix"></div>
                        <?php the_content(); ?>
                    </div><!--/.post-inner-->
                    <div class="post-footer clearfix">
                        <div class="tag-area clearfix">
                            <?php the_tags('<i class="icon-tags"></i> ',', ',''); ?> 
                        </div><!--/.tag-area-->
                        <div class="share-area clearfix">
                            <?php if ( function_exists('show_share_buttons') ) {
                            echo do_shortcode('[ssba]');
                            } ?>
                        </div><!--/.share-area-->
                    </div><!--/.post-footer-->
                    
                    <?php } else if ( has_post_format( 'quote' )) { ?>
                    <div class="clearfix quote">
                        <i class="icon-quote-right"></i> 
                        <blockquote>
                            <?php the_content(); ?>
                            <small><?php echo apply_filters('get_the_content', get_post_meta($post->ID, 'quote_author', true)); ?></small>
                        </blockquote>
                        <i class="icon-quote-left right-icon"></i> 
                    </div><!--/.clearfix--> 
                    <div class="post-meta">
                        <div><i class="icon-anchor"></i><span><?php the_time('d/m/Y'); ?></span></div>
                        <div><i class="icon-user"></i><span><?php the_author(); ?></span></div> 
                        <div><i class="icon-file-text-alt"></i><ul class="post-categories"><li><?php the_category('</li><li>'); ?></li></ul> </div> 
                    </div>
                    <div class="post-footer clearfix">
                        <div class="tag-area clearfix">
                            <?php the_tags('<i class="icon-tags"></i> ',', ',''); ?> 
                        </div><!--/.tag-area-->
                        <div class="share-area clearfix">
                            <?php if ( function_exists('show_share_buttons') ) {
                            echo do_shortcode('[ssba]');
                            } ?>
                        </div><!--/.share-area-->
                    </div><!--/.post-footer-->
                    
                    <?php } else if ( has_post_format( 'aside' )) { ?>
                    <div class="clearfix aside-body">
                       <div class="image-aside"><?php the_post_thumbnail(); ?></div>
                       <aside class="aside">
                            <div class="aside-title clearfix">
                            	<h3><?php the_title (); ?></h3>
                            </div><!--/.post-title--> 
                            <div class="bordering clearfix"></div>
                            <?php the_content(); ?>
                        </aside><!--/.aside-->
                    </div><!--/.aside-body--> 
                    <div class="post-meta">
                        <div><i class="icon-puzzle-piece"></i><span><?php the_time('d/m/Y'); ?></span></div>
                        <div><i class="icon-user"></i><span><?php the_author(); ?></span></div> 
                        <div><i class="icon-file-text-alt"></i><ul class="post-categories"><li><?php the_category('</li><li>'); ?></li></ul> </div> 
                    </div>
                    <div class="post-footer clearfix">
                        <div class="tag-area clearfix">
                            <?php the_tags('<i class="icon-tags"></i> ',', ',''); ?> 
                        </div><!--/.tag-area-->
                        <div class="share-area clearfix">
                            <?php if ( function_exists('show_share_buttons') ) {
                            echo do_shortcode('[ssba]');
                            } ?>
                        </div><!--/.share-area-->
                    </div><!--/.post-footer-->
                    
                    <?php } else if ( has_post_format( 'link' )) { ?>
                   <div class="link-image clearfix">
                        <?php $linkcode = apply_filters('get_the_content', get_post_meta($post->ID, 'link_post_url', true)); ?>
                        <a href="<?php echo $linkcode ?>" target="_blank">
                        <div class="image-link"><?php the_post_thumbnail(); ?></div>
                        <p><i class="icon-heart-empty"></i> <?php echo $linkcode ?></p>
                    	</a>
                    </div><!--/.link-image-->  
                    <div class="post-meta">
                        <div><i class="icon-link"></i><span><?php the_time('d/m/Y'); ?></span></div>
                        <div><i class="icon-user"></i><span><?php the_author(); ?></span></div> 
                        <div><i class="icon-file-text-alt"></i><ul class="post-categories"><li><?php the_category('</li><li>'); ?></li></ul> </div> 
                    </div>
                    <div class="post-inner clearfix">
                        <div class="post-title clearfix">
                        	<h3><?php the_title (); ?></h3>
                        </div><!--/.post-title-->
                        <div class="bordering clearfix"></div>
                        <?php the_content(); ?>
                    </div><!--/.post-inner-->
                    <div class="post-footer clearfix">
                        <div class="tag-area clearfix">
                            <?php the_tags('<i class="icon-tags"></i> ',', ',''); ?> 
                        </div><!--/.tag-area-->
                        <div class="share-area clearfix">
                            <?php if ( function_exists('show_share_buttons') ) {
                            echo do_shortcode('[ssba]');
                            } ?>
                        </div><!--/.share-area-->
                    </div><!--/.post-footer-->
                     
                    <?php } else { ?>
                    <div class="clerfix post-image">
                    	<?php the_post_thumbnail(); ?>
                    </div>
                    <div class="post-meta">
                        <div><i class="icon-pencil"></i><span><?php the_time('d/m/Y'); ?></span></div>
                        <div><i class="icon-user"></i><span><?php the_author(); ?></span></div> 
                        <div><i class="icon-file-text-alt"></i><ul class="post-categories"><li><?php the_category('</li><li>'); ?></li></ul> </div> 
                    </div>
                    <div class="post-inner clearfix">
                        <div class="post-title clearfix">
                        	<h3><?php the_title (); ?></h3>
                        </div><!--/.post-title-->
                        <div class="bordering clearfix"></div>
                        <?php the_content(); ?>
                    </div><!--/.post-inner-->
                    <div class="post-footer clearfix">
                        <div class="tag-area clearfix">
                            <?php the_tags('<i class="icon-tags"></i> ',', ',''); ?> 
                        </div><!--/.tag-area-->
                        <div class="share-area clearfix">
                            <?php if ( function_exists('show_share_buttons') ) {
                            echo do_shortcode('[ssba]');
                            } ?>
                        </div><!--/.share-area-->
                    </div><!--/.post-footer-->
                    <?php } ?>
                    <div class="post-pager clearfix">
                    	<?php wp_link_pages('before=<p>&after=</p>&next_or_number=number'); ?>
					</div>
               </div><!--/.post-content--> 
               
               <div class="spacing40 clearfix"></div>
               <div id="authorarea" class="clearfix">
                    <div class="row">
                        <div class="span2">
                            <div class="author-image clearfix">
                                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
									<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '160' ); }?>
                                </a>
                            </div><!--/.author-image-->
                        </div><!--/.span2-->
                        <div class="span6">
                            <div class="author-info clearfix">
                                <h3>About the Author</h3>
                                <p><?php the_author_meta('description'); ?></p>
                                <strong>View all post by <?php the_author_posts_link(); ?>.</strong>
                            </div><!--/.author-info-->
                        </div><!--/.span6-->
                    </div><!--/.row-->
               </div>
               <?php if ( comments_open() ) { ?>
               	<div id="comments" class="comments clearfix"><?php comments_template(); ?></div>
               <?php } ?>
                <div class="post-pagination clearfix">
                	<div class="pull-left"> <?php previous_post_link('%link','&larr; %title', 'no'); ?>  </div>
					<div class="pull-right"> <?php next_post_link('%link','%title &rarr;', 'no'); ?>  </div>
                </div>
				
            </article><!--/.span8-->                    
            <?php  endwhile; ?> 
           
            <?php get_sidebar(); ?>
        </div><!--/.row-->  
        
          
	</div><!--/.container-->
<?php  get_footer(); ?>