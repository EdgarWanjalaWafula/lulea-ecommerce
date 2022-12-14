<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LULEA
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-5">
					<h5 class="heading text-uppercase">about the shop</h5>
					<p>Founded by award-winning, internationally acclaimed premium leather and accessories designer, Edmond Chesneau, Luxury Leather Africa (LULEA) is an enterprise for social impact.</p>
				</div>
				<div class="col">
					<h5 class="heading text-uppercase">shop</h5>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'shop-menu'
							)
						);
					?>
				</div>
				<div class="col">
					<h5 class="heading text-uppercase">information</h5>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-3',
								'menu_id'        => 'information-menu'
							)
						);
					?>
				</div>
				<div class="col">
					<h5 class="heading text-uppercase">newsletter</h5>
					<p>Join our mailing list to stay up to date

</p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
