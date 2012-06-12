<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script>
			$(document).ready(function() {			
			});
		</script>
		<base href="<?php bloginfo('template_directory') ?>/" />
		<!--[if lt IE 9]>  
		<link rel="stylesheet" href="ie.css" /> 
		<![endif]--> 
	</head>
	<body><!-- body starts here -->
		<div id="wrapper">
			<header>
			<?php get_search_form(); ?>
		
			</header>
			<nav>
			<?php wp_nav_menu('show_home=1'); ?>
			</nav>
			<div id="content" class="group">