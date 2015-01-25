<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Owltastic
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	
	<header id="masthead" class="site-header group" role="banner">
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<div class="tagline">
			<h2>Hi! Welcome to Owltastic, my online home. I’m Meagan Fisher, a nocturnal-ish <a href="" class="designer-link">designer</a> who <a href="" class="writing-link">writes</a> and <a href="" class="speaking-link">speaks</a> about web design.</h2>
		</div><!-- /.tagline -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<ul>
				<li class="writing-link">
					<a href="">Writing</a>
				</li>
				<li class="notes-link">
					<a href="">Notes</a>
				</li>
				<li class="talks-link">
					<a href="">Talks</a>
				</li>
				<li class="work-link">
					<a href="">Work</a>
				</li>
				<li class="about-link">
					<a href="">About</a>
				</li>
				<li class="contact-link">
					<a href="">Contact</a>
				</li>
			</ul>
		</nav><!-- /#site-navigation -->
	</header><!-- /#masthead -->

	<div id="content" class="site-content">
