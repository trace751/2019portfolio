<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rams_Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	 <meta name="theme-color" content="#317EFB"/>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<script src="https://unpkg.com/scrollreveal"></script>
	<script>
		ScrollReveal({ reset: true });
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<div id="site-wrapper">	
	<div id="navigation">
		<div class="logo">
			<h1><?php echo get_option('blogname', 'Ram Dettmer'); ?></h1>
		</div>
		<div class="inner-nav">
			<div class="nav-links">
				<a href="mailto:ramdettmer751@gmail.com">Contact Me</a>
			</div>
		</div>
		<div class="dash"></div>
	</div> <!-- End Navigation -->