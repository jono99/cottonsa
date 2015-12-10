<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title(''); ?></title>

<link rel="stylesheet" media="screen" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<?php if (get_field('favicon', 'option')) { echo '<link rel="shortcut icon" href="'.get_field('favicon', 'option').'" />'; } ?>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript">
	var siteurl = '<?php echo bloginfo('url'); ?>', 
	templatedir = '<?php echo bloginfo('template_directory'); ?>', 
	ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>

<?php wp_enqueue_script('bootstrap', get_bloginfo('template_directory').'/js/bootstrap.js', array('jquery'), '1.0', true ); ?>
<?php wp_enqueue_script('theme', get_bloginfo('template_directory').'/js/theme.js', array('jquery'), '1.0', true ); ?>

<?php wp_head(); ?>

</head>

<body <?php echo body_class(); ?>>
	
	<div id="header" class="container">
		<div class="row header">
			<div class="col-lg-8 left-nav">
				<a href="#" id="logo">
					<img src="<?php echo bloginfo('template_directory'); ?>/images/logo.jpg" alt="">
				</a>
				<ul class="menu">
					<li class="menu-item current-menu-item"><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Resources</a></li>
					<li><a href="#">Our Programmes</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-lg-4 right-nav">
				<ul class="social">
					<li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
				</ul>
				<form action="" class="search">
					<input name="s" type="text">
					<button class="fa fa-search" type="submit"></button>
				</form>
			</div>
		</div>
	</div>	<!-- /header -->

	<div id="content" class="container">
		<div class="row">
			<div class="col-lg-9">
				<div id="carousel-articles" class="carousel slide" data-ride="carousel" data-interval="false">
					
					<!-- Slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="<?php echo bloginfo('template_directory'); ?>/images/carousel.jpg" alt="">
							<div class="carousel-caption">
								<h2>Heading in multiple lines</h2>
								<p>Body text lorem ipsum dolor sit amet, dignissim maistrakf sed nem eamn quem aquesia olasdf no sit , tes sdl.</p>
								<a href="#" class="btn read-more">Read More</a>
							</div>
						</div>
						<div class="item">
							<img src="<?php echo bloginfo('template_directory'); ?>/images/carousel.jpg" alt="">
							<div class="carousel-caption">
								<h2>Heading in multiple lines</h2>
								<p>Body text lorem ipsum dolor sit amet, dignissim maistrakf sed nem eamn quem aquesia olasdf no sit , tes sdl.</p>
								<a href="#" class="btn read-more">Read More</a>
							</div>
						</div>
						<div class="item">
							<img src="<?php echo bloginfo('template_directory'); ?>/images/carousel.jpg" alt="">
							<div class="carousel-caption">
								<h2>Heading in multiple lines</h2>
								<p>Body text lorem ipsum dolor sit amet, dignissim maistrakf sed nem eamn quem aquesia olasdf no sit , tes sdl.</p>
								<a href="#" class="btn read-more">Read More</a>
							</div>
						</div>
					</div>

					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-articles" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-articles" data-slide-to="1"></li>
						<li data-target="#carousel-articles" data-slide-to="2"></li>
					</ol>
				</div>	<!-- /carousel -->
				<div id="services">
					<h6>Services we offer to the cotton industry</h6>
					<h3>Accusamus contentiones nec at, eripuit invidunt lobortis eos ut. Integre nostrum nec an. In cum quot numquam blandit, meis omnium audire ne est.</h3>

					<div class="the-services">
						<div class="service-item">
							<img src="<?php echo bloginfo('template_directory'); ?>/images/quality-control.jpg">
							<h4>Quality Control</h4>
							<p></p>
							<a href="" class="btn">Read More</a>
						</div>
						<div class="service-item">
							<img src="<?php echo bloginfo('template_directory'); ?>/images/laboratory.jpg">
							<h4>Laboratory</h4>
							<p></p>
							<a href="" class="btn">Read More</a>
						</div>
						<div class="service-item">
							<img src="<?php echo bloginfo('template_directory'); ?>/images/training.jpg">
							<h4>Training</h4>
							<p></p>
							<a href="" class="btn">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<img src="<?php echo bloginfo('template_directory'); ?>/images/weather.jpg" alt="Weather">
				<div class="featured">
					<h2>Featured Posts</h2>
					<ul>
						<li>
							<p>Technical Info</p>
							<a href="">Needs of cotton plant</a>
						</li>
						<li>
							<p>Technical Info</p>
							<a href="">Establishing cotton</a>
						</li>
						<li>
							<p>Technical Info</p>
							<a href="">Cultivar recommendation</a>
						</li>
						<li>
							<p>Events</p>
							<a href="">Upcoming farm day 21 Jan 2016</a>
						</li>
						<li>
							<p>News</p>
							<a href="">Cotton Global Impact</a>
						</li>
						<li>
							<p>News</p>
							<a href="">Cotton new research</a>
						</li>
					</ul>
				</div>	<!-- /featured -->
				<form action="" class="newsletter">
					<h3>Subscribe to our newsletter for regular updates</h3>
					<input name="email" placeholder="Email address" type="text">
					<input type="submit" value="Sign Up">
				</form>	<!-- /newsletter -->
				<div class="gallery">
					<h2>Image Gallery</h2>
					<a href="">View all images &gt;</a>
				</div>	<!-- /gallery -->
			</div>
		</div>
	</div>

<?php wp_footer(); ?>

<?php if (get_field('analytics', 'option')) { echo get_field('analytics', 'option'); } ?>

</body>
</html>
