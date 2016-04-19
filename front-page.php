<?php get_header(); ?>

<div class="container-fluid bg-dark home-hero">
	<div class="container">
		<?php
			$args = array( 'post_type' => 'post', 'posts_per_page' => 1 );
			$loop = new WP_Query( $args );
			if( $loop->have_posts() ) : while( $loop->have_posts() ) : $loop->the_post();
		?>
		<a href="<?php the_permalink(); ?>" class="col-xs-12 featured-item" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
			<span><?php the_title(); ?></span>
		</a>
		<?php endwhile; endif; wp_reset_query(); ?>
	</div>
</div>

<div class="container">
	<div class="col-md-8 latest-wrapper">
		<div class="row">
			<div class="col-xs-6 latest podcasts">
				<h3>Latest Podcasts</h3>
				<?php
					$args = array( 'post_type' => 'podcast', 'posts_per_page' => 4 );
					$loop = new WP_Query( $args );
					$i = 0;
					if( $loop->have_posts() ) : while( $loop->have_posts() ) : $loop->the_post();
						$img = false;
						if( has_post_thumbnail() ) {
							$img = get_the_post_thumbnail_url();
						}
						if( get_field('meme_of_the_week') ) {
							$img = get_field( 'meme_of_the_week' );
						}
				?>
					<?php if( $i == 0 ): ?>
							<?php if( $img ): ?>
								<a href="<?php the_permalink(); ?>" class="first-post" style="background-image:url(<?php echo $img; ?>);">
									<span><?php the_title(); ?></span>
								</a>
							<?php else: ?>
								<a href="<?php the_permalink(); ?>" class="first-post" style="background-image:url(<?php echo get_template_directory_uri() . '/img/logo.jpg'; ?>);">
									<span><?php the_title(); ?></span>
								</a>
							<?php endif; ?>
					<?php else: ?>
						<article class="row">
							<div class="col-xs-12">
								<?php if( $img ): ?>
									<a href="<?php the_permalink(); ?>">
										<img src="<?php echo $img; ?>" alt="The WP Crowd Podcast" class="img-responsive"/>
									</a>
								<?php else: ?>
									<a href="<?php the_permalink(); ?>">
										<img src="<?php echo get_template_directory_uri() . '/img/logo.jpg'; ?>" alt="The WP Crowd Podcast" class="img-responsive"/>
									</a>
								<?php endif; ?>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
						</article>
					<?php endif; ?>

				<?php $i++; endwhile; endif; wp_reset_query(); ?>
				<a href="<?php echo get_bloginfo('wpurl'); ?>/podcast" class="btn btn-primary btn-block">All Podcast Shows</a>
			</div>
			<div class="col-xs-6 latest blogs">
				<h3>WordPress Blog</h3>
				<?php
				$args = array( 'post_type' => 'post', 'posts_per_page' => 4, 'offset' => 1 );
				$loop = new WP_Query( $args );
				$i = 0;
				if( $loop->have_posts() ) : while( $loop->have_posts() ) : $loop->the_post();
					if( has_post_thumbnail() ) {
						$img = get_the_post_thumbnail_url();
					}
					if( get_field('meme_of_the_week') ) {
						$img = get_field( 'meme_of_the_week' );
					}
				?>
					<?php if( $i == 0 ): ?>
						<?php if( $img ): ?>
							<a href="<?php the_permalink(); ?>" class="first-post" style="background-image:url(<?php echo $img; ?>);">
								<span><?php the_title(); ?></span>
							</a>
						<?php else: ?>
							<a href="<?php the_permalink(); ?>" class="first-post" style="background-image:url(<?php echo get_template_directory_uri() . '/img/logo.jpg'; ?>);">
								<span><?php the_title(); ?></span>
							</a>
						<?php endif; ?>
					<?php else: ?>
						<article class="row">
							<div class="col-xs-6">
								<?php if( $img ): ?>
									<a href="<?php the_permalink(); ?>">
										<img src="<?php echo $img; ?>" alt="The WP Crowd Blog" class="img-responsive"/>
									</a>
								<?php else: ?>
									<a href="<?php the_permalink(); ?>">
										<img src="<?php echo get_template_directory_uri() . '/img/logo.jpg'; ?>" alt="The WP Crowd Blog" class="img-responsive"/>
									</a>
								<?php endif; ?>
							</div>
							<div class="col-xs-6">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<span class="post-meta">By: <?php the_author_posts_link(); ?></span>
							</div>
						</article>
					<?php endif; ?>
				<?php $i++; endwhile; endif; wp_reset_query(); ?>
				<a href="<?php echo get_bloginfo('wpurl'); ?>/thewpcrowd-blog" class="btn btn-primary btn-block">Older Entries</a>
			</div>
		</div>
	</div>
	<div class="col-md-3 col-md-offset-1 sidebar">
		<ul>
			<?php dynamic_sidebar( 'main_sidebar' ); ?>
		</ul>
	</div>
</div>


<?php get_footer(); ?>
