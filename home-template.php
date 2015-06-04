<?php /**
**  Template Name: Home Template
**/ ?>
<?php get_header(); ?>
	<article id="what">
        <div class="banner">
             <div class="container">
                <div class="col-md-12 top-m">
                    <div class="top-m">
                    	<h1>Cut Medical Costs With One Call  </h1>
                        <h1 class="green">Don't Settle. Dispute. </h1>
                        <a href="<?php echo get_permalink(63); ?>"><img src="<?php bloginfo('template_url'); ?>/images/bbtn.png" class="img-responsive" /></a>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article id="works">
   		<div class="works">
    	<div class="container">
        	<div class="col-md-12">
            	<?php
					$query4 = new WP_Query( 'pagename=how-it-works' );
					while ( $query4->have_posts() ) : $query4->the_post();?>
                    <h1><?php the_title(); ?></h1>
                   <?php the_content(); ?>
                 <?php endwhile;
                	wp_reset_postdata();?>
            </div>
        </div>
    </div>
    </article>
    <article id="who">
        <div class="who">
            <div class="container">
                <div class="col-md-12">
                <?php
					$query1 = new WP_Query( 'pagename=who-is-dispute' );
					while ( $query1->have_posts() ) : $query1->the_post();?>
                    <h1><?php the_title(); ?></h1>
                   <?php the_content(); ?>
                 <?php endwhile;
                	wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </article>
    <article id="why">
    	<div class="why">
    	<div class="container">
        	<div class="col-md-12">
            	<?php
					$query2 = new WP_Query( 'pagename=why' );
					while ( $query2->have_posts() ) : $query2->the_post();?>
                    <h1><?php the_title(); ?></h1>
                   <?php the_content(); ?>
                 <?php endwhile;
                	wp_reset_postdata();?>
            </div>
        </div>
    </div>
    </article>
    <div class="bord-h"><img src="<?php bloginfo('template_url'); ?>/images/bord.png" class="img-responsive" /></div>
    <article id="pricing">
        <div class="pricing">
            <div class="container">
                <div class="col-md-12">
                	<?php
					$query3 = new WP_Query( 'pagename=pricing-options' );
					while ( $query3->have_posts() ) : $query3->the_post();?>
                    <h1><?php the_title(); ?></h1>
                   <?php the_content(); ?>
                   <?php endwhile;
                	wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </article>
    
    <article id="contact">
    	<div class="contact">
    	  <div class="container">
        	<div class="col-md-12">
            	<h1>Contact</h1>
               <?php echo do_shortcode('[contact-form-7 id="12" title="Contact form 1"]'); ?>
            </div>
        </div>
    </div>
    </article>
  <?php get_footer(); ?>