<?php get_header(); ?>
	
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<section class="main-banner group">
		<div class="banner-description">
			<div class="writing-feature">
				<?php $my_query = new WP_Query('category_name=Writing&showposts=1'); while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID;?>
    			<h1>
    				<a href="<?php the_permalink(); ?>">	
    					The latest thing I've written
	    			</a>
	    		</h1>
	    		<h2>
    				<a href="<?php the_permalink(); ?>">
    					<?php the_title(); ?>
    				</a>
    			</h2>
  				<?php the_excerpt(); ?>
  			<?php endwhile; ?>
			</div>
			<a href="" class="writing-link">See all the things I've written</a>
		</div>
		<div class="banner-image">
			<a href="">This is me with my cat</a>
		</div>
	</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
