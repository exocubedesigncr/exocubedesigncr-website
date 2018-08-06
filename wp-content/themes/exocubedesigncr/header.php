<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body class="custom-background">
<div class="page-wrap">
	<header class="header">
		<div class="wrap">
			<div class="branding">
				<?php the_custom_logo(); ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
					$blank_description = get_bloginfo( 'description', 'display' );
					if ( $blank_description || is_customize_preview() ) :
				?>
					<p class="site-description"><?php echo $blank_description; ?></p>
				<?php endif; ?>
			</div>
			<!--start menu-->
			<div class="custom-menu">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-header'
				) );
				?>
			</div>
			<!--end menu-->
		</div>
	</header>