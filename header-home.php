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
	<link rel="stylesheet" type="text/css"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
@import url('https://fonts.googleapis.com/css?family=Roboto|Cabin+Sketch&display=swap');
</style> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class ='nav-container'>
	<header class="header-container">
	<div>
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
<?php get_search_form(); ?>
			</header>
			</div>


