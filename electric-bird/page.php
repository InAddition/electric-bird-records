<?php 
	$image = get_field('featured_photo');
	$image = $image['sizes']['feature'];
?>
<?php get_header(); ?>
	<div class="container">
		<h2 class="section-title hdr-ttl"><?php the_title(); ?></h2>
		<div class="content">
			<?php if($image) { ?>
			<!--Post Header-->
			<div class="post-header post-item">
				<img src="<?php echo $image; ?>" alt="<?php echo $title ?>" class="post-image">
			</div>
			<!--Post Header-->
			<?php } ?>

			<?php if( have_rows('post_content') ): ?>
					 <?php while ( have_rows('post_content') ) : the_row(); ?>

					 	<!--WYSIWYG-->
					 	<?php  if( get_row_layout() == 'text_block' ) { ?>
					 	<div class="post-copy post-item">
					 		<div class="wysiwyg">
						 		<?php the_sub_field('text'); ?>
						 	</div>
					 	</div>
					 	<?php } ?>


			 		 	<!--Photo-->
			 	 	 	<?php  if( get_row_layout() == 'photo_block' ) { ?>
			 	 	 	<?php 
			 	 	 		$post_image = get_sub_field('photo');
			 	 	 		$post_image = $post_image['sizes']['full'];
			 	 	 		$post_link = get_sub_field('photo_link');
			 	 	 	?>
			 	 	 	<?php if($post_link) { ?>
			 	 	 	<a href="<?php echo $post_link; ?>" class="post-item post-content-image">
				 	 	 	<img src="<?php echo $post_image; ?>" alt="<?php echo $title ?>">
				 	 	 </a>
			 	 	 	<?php } ?>
			 	 	 	<?php if(!$post_link) { ?>
				 	 	 <img src="<?php echo $post_image; ?>" alt="<?php echo $title ?>" class="post-image">
			 	 	 	<?php } ?>
			 	 	 	<?php } ?>

			 		
		 	 	 	 	<!--EMBED-->
		 	 	 	 	<?php  if( get_row_layout() == 'embed_block' ) { ?>
		 	 	 	 	<div class="post-embed post-item">
		 	 	 		 	<?php the_sub_field('embed_code'); ?>
		 	 	 	 	</div>
		 	 	 	 	<?php } ?>


					 <?php endwhile; ?>
				<?php endif; ?>


		</div>
	</div>
</div> <!--End Diagonal Container-->

<?php get_footer(); ?>