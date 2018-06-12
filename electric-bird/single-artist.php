<?php get_header(); ?>
	<div class="container">
		<h2 class="section-title hdr-ttl">Artists</h2>
		<div class="content">
			<div class="music-item">
				<?php 
					$image = get_field('artist_photo');
					$image = $image[ 'sizes' ][ 'square'];
					$embed = get_field('embed');
					$facebook = get_field('facebook');
					$twitter_url = get_field('twitter');
					$instagram = get_field('instagram');
					$youtube = get_field('youtube');
					$soundcloud = get_field('soundcloud');
				?>
				<div class="artist-thumb">
					<img src="<?php echo $image ?>">
					<div class="music-links">
						Connect
						<div class="music-icons">
							
							<?php if($facebook) {?>
							<a href="<?php echo $facebook?>" target="_blank" class="music-icon">
								<?php include 'images/icon-socialMedia--facebook.svg' ?>
							</a>
							<?php } ?>
							<?php if($twitter) { ?>
							<a href="<?php echo $twitter ?>" target="_blank" class="music-icon">
								<?php include 'images/icon-socialMedia--twitter.svg' ?>
							</a>
							<?php } ?>
							<?php if($instagram) { ?>
							<a href="<?php echo $instagram ?>" target="_blank" class="music-icon">
								<?php include 'images/icon-socialMedia--instagram.svg' ?>
							</a>
							<?php } ?>
							<?php if($youtube) { ?>
							<a href="<?php echo $youtube?>" target="_blank" class="music-icon">
								<?php include 'images/icon-socialMedia--youtube.svg' ?>
							</a>
							<?php } ?>
							<?php if($soundcloud) { ?>
							<a href="<?php echo $soundcloud ?>" target="_blank" class="music-icon">
								<?php include 'images/icon-soundcloud.svg' ?>
							</a>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="music-info">
					 	<div class="post-copy post-item">
					 		<div class="wysiwyg">
					 			<h2><?php the_title(); ?></h2>
						 		<?php the_field('about'); ?>
						 	</div>
					 	</div>
					 	 	<div class="music-embed post-item">
					 		 	<?php the_field('embed'); ?>
					 	 	</div>
				</div>
			</div>
			
		</div>
	</div>
</div> <!--End Diagonal Container-->

<?php get_footer(); ?>