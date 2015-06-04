<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="refer" style="text-align:justify; margin:0px !important;">
    	<div class="container">
        	<div class="col-md-12">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post(); ?>

			 <div class="blog_text">
           		 <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                <h1><?php the_title(); ?></h1> <span><?php the_time(get_option('date_format')); ?></span>
                <p> <?php the_content(); ?> </p>
            </div>
            <div class="clear"></div>
            <div style="padding-bottom:25px;margin-bottom:25px;"> <hr /> </div>

			<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		// End the loop.
		endwhile;
		?>

		</div><!-- .site-main -->
	</div><!-- .content-area -->
</div> 
<?php get_footer(); ?>
