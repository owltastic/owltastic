<?php get_header(); ?>

	<section class="writing-banner">
		<div class="writing-banner-outer">
			<div class="writing-banner-inner">
				<h1>Writings about my work and life.</h1>
			</div>
		</div>
	</section>

	<?php if ( have_posts() ) : ?>

	<ul class="posts-list">
<?php query_posts($query_string . '&showposts=5'); ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<li>
				<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				<?php the_excerpt() ?>
			</li>

		<?php endwhile; ?>

	</ul>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

<?php get_footer(); ?>
