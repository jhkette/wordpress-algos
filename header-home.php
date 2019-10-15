<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package joes_theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class ='nav-container'>
<div class ="header-space">
	<h1><span class="large">Algorithms</span> and Data Structures </h1>
</div>
<nav class="navigation">
  <?php wp_nav_menu( array(
		'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
        'menu_class' => 'navigation-menu'
        // 'container_class' => 'navigation-main'
			  ));
			?>
</nav>
			</div>


