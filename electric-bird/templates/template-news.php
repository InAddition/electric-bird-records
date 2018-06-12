<?php /* Template Name: News Template */ ?>
<?php get_header(); ?>
	<div class="container">
		<h2 class="section-title hdr-ttl">News</h2>
		<div class="content">
			
			<?php
			global $paged;
			if(empty($paged)) $paged = 1;
			$query = new WP_Query(array(
				'post_type' => 'post',
				'posts_per_page' => 1
			));
		?>
		<?php if ( $query->have_posts() ) { ?>
		<?php while ( $query->have_posts() ) { $query->the_post(); ?>
			<?php
				$image = get_field('featured_photo');
				$image = $image['sizes']['feature'];
				$title = get_the_title();
			?>

			<div class="news-item featured-news">
				<a href="<?php the_permalink() ?>"></a>
				<h2>
					<span><?php echo mb_strimwidth($title, 0, 70, '...'); ?></span>
				</h2>
				<div class="news-thumb">
					<img src="<?php echo $image; ?>" alt="<?php the_title(); ?>" >
				</div>
			</div>


			<?php } ?>
			<?php } else { ?>
		<?php } ?>
		<?php wp_reset_postdata(); ?>



			


		<?php
				global $paged;
				if(empty($paged)) $paged = 1;
				$query = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 12,
					'offset' => 1,
					'paged' => $paged
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
				<?php tfg_pagination($pages = $query->max_num_pages); ?>
			<?php } else { ?>
				<p>There are no blog posts at this time. Please check back soon.</p>
			<?php } ?>	
		</div>
	</div>
</div> <!--End Diagonal Container-->

<?php get_footer(); ?>