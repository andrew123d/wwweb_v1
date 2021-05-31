<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'remonty' ); ?></a>

	<header id="masthead" class="site-header fixed-top">
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
			<div class="col-xs-12 col-md-8">
				<div class="row">
					<div class="col-xs-12 col-md-6"><?php dynamic_sidebar( 'sidebar-header-1' ); ?></div>
					<div class="col-xs-12 col-md-3"><?php dynamic_sidebar( 'sidebar-header-2' ); ?></div>
					<div class="col-xs-12 col-md-3">
						<div class="menu-content">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</nav><!-- #site-navigation -->
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>				
	</header><!-- #masthead -->
