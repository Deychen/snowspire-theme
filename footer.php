<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package snowspire
 */

?>

<footer class="site-footer">
	<div class="logo-container">
		<img src="<?php echo esc_url(get_template_directory_uri() . './assets/images/Snowspire 3.png'); ?>" alt="Snowspire Logo">
	</div>
	<div class="footer-content">
	<img src="<?php echo esc_url(get_template_directory_uri() . './assets/images/youtube.png'); ?>" alt="Snowspire Logo">
	<img src="<?php echo esc_url(get_template_directory_uri() . './assets/images/facebook.png'); ?>" alt="Snowspire Logo">
	<img src="<?php echo esc_url(get_template_directory_uri() . './assets/images/instagram.png'); ?>" alt="Snowspire Logo">
	<img src="<?php echo esc_url(get_template_directory_uri() . './assets/images/linkedin.png'); ?>" alt="Snowspire Logo">
	
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>