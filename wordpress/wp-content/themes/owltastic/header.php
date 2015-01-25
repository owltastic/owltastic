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
		<div class="site-description">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<div class="tagline">
				<h2>Hello! I’m Meagan Fisher, an owl-loving <a href="" class="designer-link">designer</a> who <a href="" class="writing-link">writes</a> and <a href="" class="speaking-link">speaks</a> about her work and life.</h2>
			</div><!-- /.tagline -->
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<ul>
				<li class="writing-link <?php if (in_category('writing') ): ?>current-page<?php endif; ?>">
					<a href="/?cat=4">Writing</a>
				</li>
				<li class="notes-link <?php if (in_category('notes') ): ?>current-page<?php endif; ?>">
					<a href="">Notes</a>
				</li>
				<li class="talks-link <?php if (in_category('speaking') ): ?>current-page<?php endif; ?>">
					<a href="">Talks</a>
				</li>
				<li class="work-link <?php if (in_category('working') ): ?>current-page<?php endif; ?>">
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
