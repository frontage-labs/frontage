<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Frontage
 * @since Frontage Labs 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<meta name="author" content="Victoria Moura | victoriamoura@gmail.com" />
	<meta name="theme-color" content="#FFFFFF" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/dist/img/favicon.png" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.7.2/css/all.css">
	<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="header">
		<div class="forefront">
			<div class="layout">
				<?php if ( get_theme_mod( 'site_logo' ) ): ?>
					<figure class="logo">
						<a href="<?php echo esc_url( home_url( '/' )); ?>">
								<img src="<?php echo esc_attr(get_theme_mod( 'site_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
						</a>
					</figure>
				<?php else : ?>
					<div class="logo">
						<a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>">
							<?php esc_url(bloginfo('name')); ?>
						</a>
					</div>
				<?php endif; ?>
				<nav class="main-menu">
					<?php
						wp_nav_menu ( array (
							'theme_location' => 'main-menu',
							'container_class' => 'main-menu-list' )
						);
					?>
				</nav>
				<div class="buttons">
					<?php if (is_active_sidebar('header-side')) : ?>
						<?php dynamic_sidebar('header-side'); ?>
						<?php endif; ?>
					<button class="open-menu-mobile" type="button" aria-label="Abrir menu"><i class="fas fa-bars"></i></button>
				</div>
			</div>
		</div>
	</header>