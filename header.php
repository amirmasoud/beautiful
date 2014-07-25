<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php get_template_directory_uri() ?>/images/favicon.png" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

	<div id="main-wrapper" class="main-wrapper center-block row container-fluid">
		<?php get_sidebar() ?>
		<header class="row">
			<header class="row center-block main-wrapper" id="search">
				<div class="col-xs-1 search-close animate text-center">
					<span><i class="fa fa-times"></i></span>
				</div>
				<div class="col-xs-11 search">
					<?php get_search_form() ?>
				</div>
			</header>

			<?php if( is_rtl() ) : ?>
				<div class="col-md-1 col-xs-6 menu animate">
					<span class="open-menu"><i class="fa fa-bars"></i></span>
					<span class="close-menu"><i class="fa fa-times"></i></span>
				</div>
				<div class="col-md-1 col-xs-6 search animated text-center">
					<span><i class="fa fa-search text-center"></i></span>
				</div>
				<div class="col-md-10 col-xs-12 animated">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link" rel="home">
						<div class="logo animated"><?php bloginfo('name') ?></div>
					</a>
				</div>
			<?php else : ?>
				<div class="col-md-10 col-xs-12 animated">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-link" rel="home">
						<div class="logo animated"><?php bloginfo('name') ?></div>
					</a>
				</div>
				<div class="col-md-1 col-xs-6 search animated text-center">
					<span><i class="fa fa-search text-center"></i></span>
				</div>
				<div class="col-md-1 col-xs-6 menu animate">
					<span class="open-menu"><i class="fa fa-bars"></i></span>
					<span class="close-menu"><i class="fa fa-times"></i></span>
				</div>
			<?php endif; ?>

		</header>

		<?php 
		/**
		 * Primary navigation with bootstarp
		 */
		?>
		<nav class="navbar navbar-default" id="navigation" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only"><?php _e("Toggle navigation", "beautiful") ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>	
				<?php
					wp_nav_menu( array(
					'menu'              => 'primary',
					'theme_location'    => 'primary',
					'depth'             =>  3,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav',
					'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					'walker'            => new wp_bootstrap_navwalker())
					);
				?>
			</div><!-- .container -->
		</nav><!-- #navigation -->