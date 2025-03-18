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
		<img id="footer-logo-1" src="<?php echo esc_url(get_template_directory_uri() . './assets/images/youtube.png'); ?>" alt="Snowspire Logo">
		<img id="footer-logo-2" src="<?php echo esc_url(get_template_directory_uri() . './assets/images/facebook.png'); ?>" alt="Snowspire Logo">
		<img id="footer-logo-3" src="<?php echo esc_url(get_template_directory_uri() . './assets/images/instagram.png'); ?>" alt="Snowspire Logo">
		<img id="footer-logo-4" src="<?php echo esc_url(get_template_directory_uri() . './assets/images/linkedin.png'); ?>" alt="Snowspire Logo">

	</div>
	<div id="address-list">
		<ul>
			<li>Address:</li>
			<li>Thissnowyroad 12A</li>
			<li>15634 Iceicebaby</li>
		</ul>
	</div>
	<div id="contact-list">
		<ul>
			<li>Email Us:</li>
			<li>snowspire@email.com</li>
			<li>Call Us:</li>
			<li>123 4567890</li>
		</ul>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>