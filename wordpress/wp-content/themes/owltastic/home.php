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

<section class="latest-work group">
	
	<h1>Latest work</h1>
	<h2>I'm the Creative Director at <a href="http://sproutvideo.com">SproutVideo</a>. Here's things I've made for fun or as a freelancer. <a href="">See more work</a>.</h2>

	<ul>
	<?php $my_query = new WP_Query('category_name=Working&showposts=6'); while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID;?>
			<li>
				<h3>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h3>
				<a href="<?php the_permalink(); ?>">
					<?php echo get_the_post_thumbnail($post_id, 'small'); ?> 
				</a>
			</li>
		<?php endwhile; ?>
	</ul>
</section>

<section class="speaking-events group">

	<div class="group">
		<h1><a href="">Speaking Events</a></h1>
		<h2>Sometimes I speak about web design. <a href="">Read about upcoming and past events.</a></h2>	
	</div>

	<ol class="group">
		<?php $my_query = new WP_Query('category_name=Speaking&showposts=4'); while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID;?>
			<?php the_excerpt(); ?>
		<?php endwhile; ?>
	</ol>
</section>

	<section class="elsewhere">
		<h1>Elsewhere</h1>
		<p>I am an enthusiastic <a href="" class="link-style-1">dribbbler</a>. I post things intermittently on <a href="" class="link-style-2">Twitter</a>. You can follow all my updates on <a href="" class="link-style-3">Facebook</a>. I work at <a href="" class="link-style-1">SproutVideo</a>, a fantastic service you should use. You can also <a href="" class="link-style-2">email me</a>.</p>
	</section>




<?php get_footer(); ?>
