<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
        function scroll_to_page(page){
        $(function(){
            $('.top-ul a').css("color","#767676");
            $('#menu-'+page).css("color","#ff9900");
            $('html, body').animate({
                scrollTop: $("#"+page).offset().top
            }, 800);        });
        }
		$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 30) {
             $('.banner-m').addClass('scroll');
         }
         else {
             $('.banner-m').removeClass('scroll');
         }
    });
    </script>
	<?php wp_head(); ?>
</head>

<body>
	 <div class="masthead">
        <div class="top">
            <div class="container">
                <div class="col-md-12">
                    <div class="col-md-4 left">
                        <p>For a free case evaluation : 312-624-9171</p>
                    </div>   
                    <div class="col-md-3 right">
                        <p><a href=""><i class="fa fa-envelope"></i>info@disputebills.com</a>&nbsp;&nbsp; <a class="box" href="<?php echo get_permalink(57); ?>" target="_blank">Blog</a> </p>
                    </div>             
                </div>
            </div>
        </div>
        <div class="banner-m">
          <div class="container">
             <div class="col-md-12 top-p ">
                <div class="logo col-md-3 col-sm-2 col-xs-5">
                    <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="" class="img-responsive" /></a>
                </div>
                <div class="nav col-md-9 col-sm-10 col-xs-7">
                    <nav class="navbar" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="top-ul">
                            <li><a id="menu-what" href="<?php echo home_url(); ?>">What</a></li>                         
                            <li><a id="menu-works" href="<?php echo home_url(); ?>">How it works</a></li>
                            <li><a id="menu-who" href="<?php echo home_url(); ?>">Who</a></li>
                            <li><a id="menu-why" href="<?php echo home_url(); ?>">Why</a></li>
                            <li><a id="menu-pricing" href="<?php echo home_url(); ?>">Pricing Options</a></li>   
                            <li><a id="menu-contact" href="<?php echo home_url(); ?>">Contact</a></li>
                            <li class="no-r"><a href="<?php echo get_permalink(63); ?>" target="_blank">Start the dispute</a></li>                          
                        </ul>
                     </div>
                  </nav>
                </div>
            </div>
          </div>
         </div>
     </div>