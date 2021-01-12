<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forestmerchant
 */

?>
<?php global $redux_demo; ?>
<footer class="investition__section">
	<div class="investition__section-wrapper">
		<h2 class="investition__title">
		<?php echo $redux_demo['footer__title']; ?>
		</h2>
		<p class="investition__text">
		<?php echo $redux_demo['footer__text']; ?>
		</p>

		<a href="#section6" class="fullscreen__link"><?php echo $redux_demo['btn']; ?></a>
	</div>

</footer>
<script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<?php wp_footer(); ?>

<script>
	lazyload();
	new Sim();
</script>



</body>

</html>