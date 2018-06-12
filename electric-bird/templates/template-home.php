<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>
	<div class="container">


		<?php if( have_rows('featured_slider') ): ?>
		<div class="slider js-slider">
			<?php while( have_rows('featured_slider') ): the_row(); 
				$image = get_sub_field('slide_image');
				$image = $image[ 'sizes' ][ 'feature'];
			?>
			<a href="#" class="slide">
				<img src="<?php bloginfo('template_url'); ?>/images/temp/temp-slider.jpg">
			</a>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>

		<div class="home-news-container">
			<h2 class="section-title short-ttl">News</h2>




			<?php
					global $paged;
					if(empty($paged)) $paged = 1;
					$query = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 4
					));
				?>
				<?php if ( $query->have_posts() ) { ?>
					<div class="news-grid">
					<?php while ( $query->have_posts() ) { $query->the_post(); ?>
						<?php
							$image = get_field('featured_photo');
							$image = $image['sizes']['square'];
							$title = get_the_title();
						?>
						<?php if( 0 == $wp_query->current_post ) { ?>
						<?php } else { ?>
						<div class="news-item">
							<a href="<?php the_permalink() ?>"></a>
							<h2>
								<span><?php echo mb_strimwidth($title, 0, 70, '...'); ?></span>
							</h2>
							<div class="news-thumb">
								<img src="<?php echo $image; ?>" alt="<?php the_title(); ?>" >
							</div>
						</div>
						<?php } ?>
				<?php } ?>
					</div>
					
				<?php } else { ?>
					<p>There are no blog posts at this time. Please check back soon.</p>
				<?php } ?>	
				<?php wp_reset_postdata(); ?>
		</div>
		<div class="twitter-container">
			<div class="twitter">
				<h2 class="section-title wide-ttl">Twitter</h2>
				<?php 
					$tweet = get_field('twitter');
				?>
				<div class="tweet">
					<?php echo $tweet ?>
				</div>
			</div>
		</div>
	</div>
</div> <!--End Diagonal Container-->

<?php get_footer(); ?>