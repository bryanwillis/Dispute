<?php include (TEMPLATEPATH . '/blogheader.php'); ?>
	<div class="works" style="text-align:justify; margin:0px !important;">
    	<div class="container">
        	<div class="col-md-12">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			
		endwhile;
		?>

		</div><!-- .site-main -->
	</div><!-- .content-area -->
</div>
<?php get_footer(); ?>
