<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LULEA
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
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header position-absolute w-100">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col">
					<nav id="site-navigation" class="main-navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'     => 'd-flex primary-menu',
								)
							);
						?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="col-lg-2">
					<div class="site-branding">
						<?php
							the_custom_logo(); 
						?>
					</div><!-- .site-branding -->
				</div>
				<div class="col">
					<div class="header-right-icons d-flex justify-content-end">
						<ul class="d-flex">
							<li><a href=""><span class="material-symbols-sharp">person</span></a></li>
							<li><a href=""><span class="material-symbols-sharp">search</span></a></li>
							<li><a href=""><span class="material-symbols-sharp">shopping_bag</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
