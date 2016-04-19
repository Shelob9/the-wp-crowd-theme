		<div class="container-fluid bg-blue home-hero podcast">
			<div class="container">
				<h4>Latest Podcast</h4>
				<?php
				wp_reset_query();
				$args = array( 'post_type' => 'podcast', 'posts_per_page' => 1 );
				$loop = new WP_Query( $args );
				if( $loop->have_posts() ) : while( $loop->have_posts() ) : $loop->the_post();
					$img = get_template_directory_uri() . '/img/logo.jpg';
					if( has_post_thumbnail() ) {
						$img = get_the_post_thumbnail_url();
					}
					if( get_field('meme_of_the_week', $post->ID) ) {
						$img = get_field( 'meme_of_the_week' );
					}
					?>
					<a href="<?php the_permalink(); ?>" class="col-xs-12 featured-item" style="background-image:url(<?php echo $img; ?>);">
						<span><?php the_title(); ?></span>
					</a>
				<?php endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
		<footer class="container-fluid">
			<div class="container">
				<div class="col-md-4">
					<a href="<?php echo get_bloginfo('wpurl'); ?>" class="logo">
						<img src="<?php echo get_template_directory_uri() . '/img/logo-footer.png'; ?>" alt="The WP Crowd Podcast" class="img-responsive" />
					</a>
				</div>
				<nav class="col-md-4">
					<h5>Crowd Adventures</h5>
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => '' ) ); ?>
				</nav>
				<div class="col-md-4">
					<h5>Never Miss the Crowd</h5>
					<form action="<?php echo get_bloginfo('wpurl'); ?>">
						<input type="email" placeholder="Email Address" />
						<button type="submit" class="btn btn-primary">Sign Up</button>
					</form>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>