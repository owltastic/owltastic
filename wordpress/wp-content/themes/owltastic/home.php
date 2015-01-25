<?php get_header(); ?>
	
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

<section class="notes">
	<div class="group notes-header">
		<h1><a href="">Things worth noting</a></h1>
		<h2>Designy, inspiring, or useful things. <a href="">See all the things</a>.</h2>
	</div>

	<ul class="group">
		<?php $my_query = new WP_Query('category_name=Notes&showposts=4'); while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID;?>
				<li class="group">
					<a href="<?php the_permalink(); ?>">
						<?php echo get_the_post_thumbnail($post_id, 'thumbnail'); ?> 
					</a>
					<div class="note-description">
						<h3>
	  					<a href="<?php the_permalink(); ?>">
	  						<?php the_title(); ?>
	  					</a>
	  				</h3>
	  				<p><?php the_excerpt(); ?></p>
	  				<a href="<?php the_permalink(); ?>" class="keep-reading">Keep Reading</a>
	  			</div>
				</li>
			<?php endwhile; ?>
	</ul>

</section>


<?php get_footer(); ?>
