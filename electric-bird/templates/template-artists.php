<?php /* Template Name: Artists Template */ ?>
<?php get_header(); ?>
	<div class="container">
		<h2 class="section-title hdr-ttl">Artists</h2>
		<div class="content">
			

				<?php
					global $paged;
					if(empty($paged)) $paged = 1;
					$query = new WP_Query(array(
						'orderby'    => 'date',
						'order'    => 'DSC',
						'post_type' => 'artist',
						'posts_per_page' => 15
					));

				?>
				<?php if ( $query->have_posts() ) { ?>
						<div class="news-grid">
						<?php while ( $query->have_posts() ) { $query->the_post(); ?>
						<?php 
							$image = get_field('artist_photo');
							$image = $image[ 'sizes' ][ 'square'];
						?>
							<div class="news-item">
								<a href="<?php the_permalink(); ?>"></a>
								<h2>
									<span><?php the_title(); ?></span>
								</h2>
								<div class="news-thumb">
									<img src="<?php echo $image ?>">
								</div>
							</div>
						<?php } ?>
						</div>
					<?php } else { ?>
						<p>There are no Artists at this time. Please check back soon.</p>
					<?php } ?>

				

		</div>
	</div>
</div> <!--End Diagonal Container-->

<?php get_footer(); ?>