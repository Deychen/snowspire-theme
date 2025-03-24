<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package snowspire
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<div <?php body_class(); ?>>
	<?php wp_body_open(); ?>
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'snowspire'); ?></a>

	<header id="masthead" class="site-header">
			<div class="logo">

				<a href="<?php echo esc_url(home_url('home')); ?>">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/pictures/Snowspire.png"
						alt="Snowspire">
				</a>

			</div>

			<div class="logo-mobile">

				<a href="<?php echo esc_url(home_url('home')); ?>">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/pictures/Snowspire-mobile.png"
						alt="Snowspire">
				</a>

			</div>

			<div class="menu">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu"
						aria-expanded="false"><?php esc_html_e('', 'snowspire'); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu',
						)
					);

					?>

				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->
