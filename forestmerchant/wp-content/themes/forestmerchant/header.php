<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Forestmerchant
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/img/Tree.ico" type="image/x-icon">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<script src="https://unpkg.com/scrollreveal"></script>

	<?php wp_head(); ?>
</head>
<?php global $redux_demo; ?>

<body <?php body_class(); ?>>

	<body>
		<div class="wrapper">
			<header class="header" id="menu">
				<div class="header__body">
					<a href="#section1" class="header__logo">
						<img src="data:image/gif;base64,R0lGODlhKAANAIAAAP///wAAACH5BAEAAAEALAAAAAAoAA0AAAIUjI+py+0Po5y02ouz3rz7D4biyBUAOw==" data-src="<?php bloginfo('template_directory'); ?>/assets/img/logo.gif" alt="Logo" class="lazyload">
					</a>
					<div class="header__burger">
						<span></span>
					</div>
					<?php
					add_filter('nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3);

					function wpse156165_menu_add_class($classes, $item, $args)
					{
						if (isset($args->add_link_class)) {
							$classes['class'] = $args->add_link_class;
						}
						return $classes;
					}
					wp_nav_menu(
						array(
							'menu_id'	=> 'primary-menu',
							'container_class'	=> 'header__menu',
							'menu_class'	=> 'header__list',
							'add_link_class'	=> 'header__link',
						)
						);
					?>
				</div>
			</header>








			<main class="fullscreen" id="section1">
				<div class="fullscreen__body">
					<div class="fullscreen__title">
						<h1 class="fullscreen__title-1 _anim-items">
							<?php echo $redux_demo['theme']; ?>
						</h1>
						<h1 class="fullscreen__title-2">
							<?php bloginfo('name'); ?>
						</h1>
					</div>
					<div class="fullscreen__content">
						<div class="img__container">
							<img src="<?php bloginfo('template_directory'); ?>/assets/img/fullscreen_img.webp" alt="game-img" class="fullscreen__img lazyload">
						</div>
						<p class="fullscreen__text">
							<?php echo $redux_demo['text']; ?>
						</p>
					</div>
					<div class="btn__link">
						<a href="#section6" class="fullscreen__link"><?php echo $redux_demo['btn']; ?></a>
					</div>
					<div class="scroll">
						<a href="#section2"><i class="fas fa-angle-double-down"></i></a>
					</div>

				</div>


			</main>