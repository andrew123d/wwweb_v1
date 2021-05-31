<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Super_remonty
 */

?>

<?php 
//$front_id = get_option( 'page_on_front' );
$front_id = 2;
$logo = get_field('main_logo', $front_id);
$locale = get_locale();
//echo $locale; 
?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<figure class="main-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php if ($logo) { echo '<img src="'.$logo.'">'; } ?>
							<figcaption>
							<?php //bloginfo( 'name' ); ?>
							</figcaption>
						</a>
					</figure>
					
				</div>
				<div class="col-xs-12 col-md-4">
				<nav>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-2',
									'menu_id'        => 'Footer-menu-1',
								)
							);
						?>
					</nav>
				</div>
				<div class="col-xs-12 col-md-4">
				<nav>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-3',
									'menu_id'        => 'Footer-menu-2',
								)
							);
						?>
					</nav>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4">
			<?php dynamic_sidebar( 'sidebar-footer-2' ); ?>
			</div>
			<div class="col-xs-12 col-md-4">
			<?php dynamic_sidebar( 'sidebar-footer-3' ); ?>
			</div>
			<div class="col-xs-12 col-md-4">
			<?php dynamic_sidebar( 'sidebar-footer-4' ); ?>
			</div>
		</row>
		<div class="row">
			<div class="col-xs-12 col-md-12 copyright-content">
					<?php dynamic_sidebar( 'sidebar-footer-1' ); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
