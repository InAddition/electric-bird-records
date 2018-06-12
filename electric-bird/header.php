<?php global $asset_v; ?>
<!doctype html>
<!--[if lt IE 7]><html class="lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en-US"><![endif]-->
<!--[if IE 7]><html class=" lt-ie10 lt-ie9 lt-ie8 ie7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="lt-ie10 lt-ie9 ie8" lang="en-US"><![endif]-->
<!--[if IE 9]><html class="lt-ie10 ie9" lang="en-US"><![endif]-->
<!--[if gt IE 9]><!--><html lang="en"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title><?php bloginfo('name'); ?> | <?php the_title(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta property="og:description" content="<?php bloginfo('description'); ?>">
		<meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title(); ?>">
		<meta property="og:site_name" content="<?php bloginfo('title'); ?>">
		<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/fb.png?v=2">
		<meta property="og:url" content="<?php echo current_url(); ?>">
		<meta property="og:type" content="website">
		<meta name="format-detection" content="date=no">
		<link rel="manifest" href="<?php bloginfo('template_url'); ?>/site.webmanifest">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/icon.png">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.min.css?v=<?php echo $asset_v; ?>">
		<?php wp_head(); ?>
	</head>
	<body class="page-<?php the_title() ?> <?php if(get_post_type() == 'post'){ echo 'page-Post'; } ?> <?php if(get_post_type() == 'artist'){ echo 'page-Artist'; } ?>">

		<div class="top-bar"></div>
		<div class="wrapper">	
		<header>
			<div class="header-container">
				<a href="<?php bloginfo('url'); ?>" class="logo">
					<img src="<?php bloginfo('template_url'); ?>/images/logo-main.png">
				</a>
				<nav>
				<?php 
					$facebook = get_field('facebook', 2);
					$twitter_url = get_field('twitter_url', 2);
					$instagram = get_field('instagram', 2);
					$youtube = get_field('youtube', 2);
					$soundcloud = get_field('soundcloud', 2);
				?>
					<div class="nav-menu">
						<ul class="nav-links">
							<li class="nav-about">
								<a href="<?php bloginfo('url'); ?>/about">About</a>
							</li>
							<li class="nav-divider"></li>
							<li class="nav-artists">
								<a href="<?php bloginfo('url'); ?>/artists">Artists</a>
							</li>
							<li class="nav-divider"></li>
							<li class="nav-releases">
								<a href="<?php bloginfo('url'); ?>/releases">Releases</a>
							</li>
							<li class="nav-divider"></li>
							<li class="nav-news">
								<a href="<?php bloginfo('url'); ?>/news">News</a>
							</li>
							<li class="nav-divider"></li>
							<li>
								<a href="https://electricbirdrecords.bandcamp.com/" target="_blank">Bandcamp</a>
							</li>
						</ul>
						<ul class="nav-social">
							<?php if($facebook) {?>
							<li>
								<a href="<?php echo $facebook ?>" target="_blank">
									<?php include 'images/icon-socialMedia--facebook.svg' ?>
								</a>
							</li>
							<?php } ?>
							<?php if($twitter_url) { ?>
							<li>
								<a href="<?php echo $twitter_url ?>" target="_blank">
									<?php include 'images/icon-socialMedia--twitter.svg' ?>
								</a>
							</li>
							<?php } ?>
							<?php if($instagram) { ?>
							<li>
								<a href="<?php echo $instagram ?>" target="_blank">
									<?php include 'images/icon-socialMedia--instagram.svg' ?>
								</a>
							</li>
							<?php } ?>
							<?php if($youtube) { ?>
							<li>
								<a href="<?php echo $youtube ?>" target="_blank">
									<?php include 'images/icon-socialMedia--youtube.svg' ?>
								</a>
							</li>
							<?php } ?>
							<?php if($soundcloud) { ?>
							<li>
								<a href="<?php echo $soundcloud ?>" target="_blank">
									<?php include 'images/icon-soundcloud.svg' ?>
								</a>
							</li>
							<?php } ?>
						</ul>
					</div>
					<div class="hamburger">
						<a href="#" class="hamburger-icon">
							<span></span>
						</a>
					</div>
				</nav>
			</div>
			<div class="nav-background"></div>
			<div class="nav-shadow"></div>
		</header>
		

			
			
			<div class="diagonal-container">
				<div class="diagonal"></div>
				