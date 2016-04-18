<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="https://use.typekit.net/qnr6hsu.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
	</head>
	<body <?php body_class(); ?>>
		<div class="container-fluid newsletter">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<form class="form-inline">
							<div class="form-group">
								<label for="email">Never Miss the Crowd:</label>
								<input type="email" id="email" id="email" placeholder="Email Address" />
							</div>
							<input type="submit" class="btn btn-primary" value="Sign Up" />
						</form>
					</div>
				</div>
			</div>
		</div>
		<header class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4 text-center logo">
					<a href="<?php echo get_bloginfo('wpurl'); ?>">
						<img src="<?php echo get_template_directory_uri() . '/img/logo.jpg'; ?>" alt="The WP Crowd Podcast" class="img-responsive" />
					</a>
				</div>
			</div>
			<div class="row">
				<nav class="col-xs-12">
					<?php wp_nav_menu( array( 'theme_location' => 'header', 'container' => '' ) ); ?>
				</nav>
			</div>
		</header>