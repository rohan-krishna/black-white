<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<!--Meta Tags!-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="">
<meta name="author" content="Rohan Krishna">
<link rel="author" href="https://plus.google.com/+RohanKrishna/posts/">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--Link Tags!-->
<link rel="favicon" href="<?php echo THEME_DIR; ?>/favicon.png" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">

<!--Script Tags!-->

<!--Title Tag!-->
<title><?php bloginfo( 'name' ); ?></title>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="top-header" id="topHeader">
	<div class="container">
		<section class="head-logo">
			<a href="<?php echo bloginfo('home'); ?>" class="logo-link">
				<?php bloginfo('name'); ?>
			</a>
			<p class="logo-desc clearfix">Web Designer & Developer</p>
			<div class="head-search">
				<?php get_search_form() ?>
			</div>	
		</section>
		<?php wp_nav_menu(array('theme_location' => 'header','container' => false,'echo' => true)); ?>
	</div>	
</header>