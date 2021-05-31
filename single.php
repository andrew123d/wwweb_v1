<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Super_remonty
 */

get_header();
?>

	<main id="primary" class="site-main page">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content_s', get_post_type() ); ?>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<?php 
							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">' . esc_html__( '', 'remonty' ) . '</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__( '', 'remonty' ) . '</span>',
								)
							);
						?>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<?php 
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
