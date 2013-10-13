    <div id="footer" class="container">
    	<div class="row">
        	<?php
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-sidebar') ) :
			endif;
			?>
        </div><!--/.row-->
        <div class="copyright clearfix">
        	<?php if ( function_exists( 'ot_get_option' ) ) :if (ot_get_option( 'copyright_text')) :   ?>
            <p><?php echo ot_get_option( 'copyright_text' ); ?></p>
            <?php endif ; endif; ?>
        </div>
    </div><!--footer-->
  
    
<?php wp_footer(); ?>


</body>
</html>