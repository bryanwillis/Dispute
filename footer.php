<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
 <div class="footer">
    	<div class="container">
        	<div class="col-md-12">
            	<ul>
                    <li><a href="https://www.facebook.com/"><img src="<?php bloginfo('template_url'); ?>/images/fb.png" class="img-responsive" /></a></li>
                    <li><a href="https://twitter.com/?lang=en"><img src="<?php bloginfo('template_url'); ?>/images/twt.png" class="img-responsive" /></a></li>
                    <li><a href="https://plus.google.com/"><img src="<?php bloginfo('template_url'); ?>/images/gplus.png" class="img-responsive" /></a></li>
                </ul>
                <div class="clearfix"></div>
                <p>410 N. May Street, Chicago, IL 60642</p>
                <p><a href="<?php echo get_permalink(26); ?>">Privacy Policy</a> |<a href="<?php echo get_permalink(29); ?>"> Terms of Use</a></p>
                <p>Copyright © 2015 - www.disputebills.com. - All Rights Reserved<br />
For questions or comments please contact info@disputebills.com</p>
            </div>
        </div>
    </div>
<script async src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.11.0.js"></script> 

<!-- Bootstrap Core JavaScript --> 
<script async src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script> 

<?php wp_footer(); ?>

</body>
</html>
