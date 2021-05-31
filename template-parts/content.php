<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Super_remonty
 */

?>
<div class="col-xs-12 col-md-6 custom-posts-remonty">
	<article id="post-<?php the_ID(); ?>">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<figure>
				<img src="<?php echo get_the_post_thumbnail_url( $post, 'full' ); ?>" alt="<?php the_title(); ?>">
			<figcaption>
			<h3><?php the_title(); ?></h3>
			<div><?php the_excerpt(); ?></div>
			<div>
				<button type="button" class="custom-block_btn">Poznaj więcej</button>
			</div>
			</figcaption>
			</figure>
		</a>
	</article>
</div>

<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				remonty_posted_on();
				remonty_posted_by();
				?>
			</div>
		<?php endif; ?>
	</header>

	<?php remonty_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'remonty' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'remonty' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<footer class="entry-footer">
		<?php remonty_entry_footer(); ?>
	</footer>
</article> -->
