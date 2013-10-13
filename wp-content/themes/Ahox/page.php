<?php  get_header(); ?>
	<div class="spacing40 clearfix"></div>
	<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<div class="container"><p id="breadcrumbs">','</p></div>');
	} ?>
    
    <div class="container post-page">
        <div class="row">
			<?php while (have_posts()) : the_post();?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('span8'); ?>> 
                <div class="post-content clearfix">
                    <div class="clerfix post-image">
                    	<?php the_post_thumbnail(); ?>
                    </div>
                    <div class="post-meta">
                        <div><i class="icon-folder-open-alt"></i><span><?php the_time('d/m/Y'); ?></span></div>
                        <div><i class="icon-user"></i><span><?php the_author(); ?></span></div> 
                    </div>
                    <div class="post-inner clearfix">
                        <div class="post-title clearfix">
                        	<h3><?php the_title (); ?></h3>
                        </div><!--/.post-title-->
                        <div class="bordering clearfix"></div>
                        <?php the_content(); ?> 
                    </div><!--/.post-inner-->
                     
                    <div class="post-page clearfix center"><?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?></div>
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
            <?php endwhile; ?> 
             
            <?php get_sidebar(); ?>
        </div><!--/.row--> 
     
    </div><!--/.container-->
    
<?php  get_footer(); ?>