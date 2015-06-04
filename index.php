<?php /**
**		Template Name: Blog
**/ ?>
<?php include (TEMPLATEPATH . '/blogheader.php'); ?>

	<div class="works" style="text-align:justify; margin:0px !important;">
    	<div class="container">
        	<div class="col-md-12">
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                  $args = array('posts_per_page' => 2, 'paged' => $paged );
                  query_posts($args); ?>      
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

		    <div class="blog_text">
           		 <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                <h1><?php the_title(); ?></h1> <span><?php the_time(get_option('date_format')); ?></span>
                <p> <?php the_content(); ?> </p>
                <a href="<?php the_permalink() ?>" class="comments"><?php comments_number('0','1', '%'); ?>  COMMENTS</a>
            </div>
            <div class="clear"></div>
            <div style="padding-bottom:25px;margin-bottom:25px;"> <hr /> </div>  
			<?php endwhile; 
			the_posts_pagination( array(
				'prev_text'          => __( '<<', 'twentyfifteen' ),
				'next_text'          => __( '>>', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'twentyfifteen' ) . ' </span>',
			) );?>
				<?php else :
					get_template_part( 'content', 'none' );
		
				endif;
				?>

		</div><!-- .site-main -->
	</div><!-- .content-area -->
</div>
<?php get_footer(); ?>
