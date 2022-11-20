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
    <div class="fs-preloader">
        <div class="theme-loader">
            <div class="theme-loading">
            </div>
        </div>
    </div>
    <div id="page" class="site <?php // echo is_front_page() ? 'front' : 'inner-page'; ?>">

        <header id="masthead" class="site-header w-100 <?php echo $class = is_product() ? 'position-relative' : 'position-absolute'; ?>">
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
							<?php 
								if ( class_exists( "WooCommerce" ) ) {
								$cart_url   = WC()->cart->get_cart_url();
								}

								$items_count = WC()->cart->get_cart_contents_count(); 
							?>
                            <ul class="d-flex">
                                <li class="position-relative"><a href=""><span class="material-symbols-sharp">person</span></a></li>
                                <li class="position-relative"><a href=""><span class="material-symbols-sharp">search</span></a></li>
                                <li class="position-relative"><a class="cart-contents" href="<?php echo $cart_url; ?>"><span class="material-symbols-sharp">shopping_bag</span><span class="theme-small"><?php echo $items_count ? $items_count : '0'; ?></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->