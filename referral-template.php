<?php /**
** Template Name: Referral
**/ ?>
<?php include (TEMPLATEPATH . '/blogheader.php'); ?>
<?php while ( have_posts() ) : the_post(); ?>
        <div class="refer">
        	<div class="b-img"><?php the_post_thumbnail('full'); ?>
                    <div class="caption">
                        <h1><?php echo get_post_meta($post->ID, 'bcont', true); ?></h1>
                    </div></div>
             <div class="container">
                <div class="col-md-12 top-m">
                	<h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
 <?php endwhile; ?>
<?php get_footer(); ?>