<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->


<!DOCTYPE html>
<html>
  <head>

  	<meta name="google-site-verification" content="ytb6mu2sgS7kW-iKaeyHrYyFpHRHEViiARViCtJs-1s" />
    <title>Sigrún Stella</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/css/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/css/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-85735771-1', 'auto');
		  ga('send', 'pageview');

		</script>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>


	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<!-- <div id="container">
 -->
			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">

					<p id="logo" class="h2" itemscope itemtype="http://schema.org/Organization"><a href="<?php echo home_url(); ?>" rel="nofollow">SIGRÚN STELLA</a></p>


					<!-- <div id="menu-container"> -->

						<a id="fb-link" class="social-link" href="https://www.facebook.com/Sigrun-Stella-171142652965713/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/css/images/facebook.png"></a>

						<a id="insta-link" class="social-link" href="https://www.instagram.com/sigrunstella1/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/css/images/instagram.png"></a>

						<a id="twitter-link" class="social-link" href="https://twitter.com/sigrun_stella" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/css/images/twitter.png"></a>


	       				<button class="hamburger hamburger--slider" type="button">
  							<span class="hamburger-box">
    							<span class="hamburger-inner"></span>
  							</span>
						</button>


						<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php wp_nav_menu(array(
	    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
	    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
	    					         'theme_location' => 'main-nav',                 // where it's located in the theme
	    					         'before' => '',                                 // before the menu
	        			               'after' => '',                                  // after the menu
	        			               'link_before' => '',                            // before each link
	        			               'link_after' => '',                             // after each link
	        			               'depth' => 0,                                   // limit the depth of the nav
	    					         'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>

						</nav>

						
<!-- 
					</div> -->


				</div>

			</header>
