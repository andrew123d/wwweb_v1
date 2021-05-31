<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Super_remonty
 */

?>

<?php 
$id = get_the_ID();
$block_1 = [
	"tit1" => get_field('title_block_1', $id),
	"tit2" => get_field('title_block_2', $id),
	"tit2_bg" => get_field ('title_block_2_background', $id),
	"img" => get_field('block_image_1', $id),
	"vid" => get_field('block_video_2_', $id),
	"txt" => get_field('block_text_', $id),
	"btn_txt" => get_field('block_button_text_', $id),
	"btn_link" => get_field('block_button_link_', $id),
	
];
$block_2 = [
	"tit1" => get_field('title_block_2_1', $id),
	"tit2" => get_field('title_block_2_2', $id),
	"img" => get_field('block_image_2_1', $id),
	"vid" => get_field('block_video_2_2', $id),
	"txt" => get_field('block_text_2-1', $id),
	"btn_txt" => get_field('block_button_text_2', $id),
	"btn_link" => get_field('block_button_link_2', $id)
]; 
$block_3 = [
	"tit1" => get_field('title_block_1_3', $id),
	"tit2" => get_field('title_block_2_3', $id),
	"tit2_bg" => get_field ('title_block_2_background_3', $id),
	"img" => get_field('block_image_1_3', $id),
	"vid" => get_field('block_video_2_3', $id),
	"txt" => get_field('block_text_3', $id),
	"btn_txt" => get_field('block_button_text_3', $id),
	"btn_link" => get_field('block_button_link_3', $id)
]; 

$block_4 = [
	"tit1" => get_field('title_block_1_4', $id),
	"tit2" => get_field('title_block_2_4', $id),
	"img" => get_field('block_image_1_4', $id),
	"vid" => get_field('block_video_2_4', $id),
	"txt" => get_field('block_text_4', $id),
	"btn_txt" => get_field('block_button_text_4', $id),
	"btn_link" => get_field('block_button_link_4', $id)
]; 

$imageDesc = get_field('main_image_description', $id); 
$sub_footer_tit1 = get_field('show_sub_page_footer_1', $id); 
$sub_footer_tit2 = get_field('show_sub_page_footer_2', $id);

//var_dump($sub_footer_tit2); 
//var_dump($sub_footer_tit1);
//  var_dump($block_1);
//  var_dump($block_2);
//  var_dump($block_3);
//  var_dump($block_4);
?>
<?php if (has_post_thumbnail()) : ?>
	<div class="container-fluid <?php post_class(); ?>" >
		<div class="row">
			<div class="col-xs-12 col-md-12 main-page-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
				<!-- <figure>
					<img src="<?php //echo get_the_post_thumbnail_url(); ?>">
					<figcaption> -->
						<?php if ( $imageDesc ) : ?>
							<?php echo '<div>'.$imageDesc.'</div>'; ?>
						<?php endif; ?>
					<!-- </figcaption> -->
			</div>		
		</div>
	</div>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-12">
		<?php if (is_front_page()) : ?>
				<header class="entry-header"></header>
			<?php else: ?>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
			<?php endif; ?>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-12">
		<article id="post-<?php the_ID(); ?>">
				<?php if( $block_1['tit1'] ) : ?>
				<div class="custom-block-page">
					<div class="row">
						<?php if ($block_1['tit1']) :?>
						<?php echo '<div class="col-xs-12 col-md-5 title_2 right animate__animated "><h5> # 1</h5><h2>'.$block_1['tit1'].'</h2></div>'; ?>
							<?php if ($block_1['tit2'] ) :?>

								<?php if ($block_1['tit2_bg'] ) :?>
									<?php echo '<div class="col-xs-12 col-md-7 title_3" style="background-image: url('.$block_1['tit2_bg'].')"><h3>'.$block_1['tit2'].'</h3></div>'; ?>
								<?php else: ?>
									<?php echo '<div class="col-xs-12 col-md-7 title_3"><h3>'.$block_1['tit2'].'</h3></div>'; ?>
								<?php endif; ?> 
							
							<?php endif; ?>
						<?php endif; ?>						
					</div>
					<div class="row">
						<?php if ( $block_1['txt'] ) :?>
						<?php echo '<div class="col-xs-12 col-md-5  content-block justify">'; ?>
							<div><?php echo $block_1['txt']; ?></div>
							<?php if ($block_1['btn_link'] && $block_1['btn_txt'] ) : ?>
								<?php echo '<div><a href="'.$block_1['btn_link'].'"><button type="button" class="custom-block_btn">'.$block_1['btn_txt'].'</button></a></div>'; ?>
							<?php endif; ?>
						<?php echo '</div>'; ?>
						<?php echo '<div class="col-xs-12 col-md-7 image-block"><div><figure><img class="anim_img animate__animated" src="'.$block_1['img'].'">'.$block_1['vid'].'<figcaption></figcaption></figure></div>'; ?>
							<?php //if ($block_1['btn_link'] && $block_1['btn_txt'] ) : ?>
								<?php //echo '<div><a href="'.$block_1['btn_link'].'"><button type="button" class="custom-block_btn">'.$block_1['btn_txt'].'</button></a></div>'; ?>
							<?php //endif; ?>
						<?php echo '</div>'; ?>
						<?php endif; ?>
					</div>
				</div>
				<?php endif; ?>

				<?php if( $block_2['tit1'] ) : ?>
				<div class="custom-block-page">
					<div class="row">
						<?php if ($block_2['tit1']) :?>
							<?php echo '<div class="col-xs-12 col-md-12 title_2_v2 center animate__animated"><h5># 2</h5><h2>'.$block_2['tit1'].'</h2></div>'; ?>
						<?php endif; ?>						
					</div>
					<div class="row">
						<?php if ( $block_2['txt'] ) :?>
							
								<?php if ( $block_2['btn_link'] && $block_2['btn_txt'] ) : ?>
									<?php echo '<div class="content-block_v2" style="background-image: url('.$block_2['img'].')"><div class="custom-bg-caption"><div>'.$block_2['txt'].'</div> <div><a href="'.$block_2['btn_link'].'"><button type="button" class="custom-block_btn">'.$block_2['btn_txt'].'</button></a></div></div></div>'; ?>
								<?php else : ?>
									<?php echo '<div class="content-block_v2" style="background-image: url('.$block_2['img'].')"><div class="custom-bg-caption"><div>'.$block_2['txt'].'</div></div>'; ?>
								<?php endif; ?>
						<?php endif; ?>
					</div>
					<?php if ($block_2['tit2']) : ?>
						<div class="row"><?php echo '<div class="col-xs-12 col-md-12 title_3_v2"><h3>'.$block_2['tit2'].'</h3></div>'; ?></div>
					<?php endif; ?>
				</div>
				<?php endif; ?>

				<?php if( $block_3['tit1'] ) : ?>
				<div class="custom-block-page">
					<div class="row">
						<?php if ($block_3['tit1']) :?>
						
							<?php if ($block_3['tit2'] ) :?>

								<?php if ($block_3['tit2_bg'] ) :?>
									<?php echo '<div class="col-xs-12 col-md-7 title_3" style="background-image: url('.$block_3['tit2_bg'].')"><h3>'.$block_3['tit2'].'</h3></div>'; ?>
								<?php else: ?>
									<?php echo '<div class="col-xs-12 col-md-7 title_3"><h3>'.$block_3['tit2'].'</h3></div>'; ?>
								<?php endif; ?> 
							
							<?php endif; ?>
							<?php echo '<div class="col-xs-12 col-md-5 title_2 right animate__animated "><h5> # 3</h5><h2>'.$block_3['tit1'].'</h2></div>'; ?>
						<?php endif; ?>						
					</div>
					<div class="row">
						<?php if ( $block_3['txt'] ) :?>
						<?php echo '<div class="col-xs-12 col-md-7 image-block"><div><figure><img class="anim_img animate__animated" src="'.$block_3['img'].'">'.$block_3['vid'].'<figcaption></figcaption></figure></div>'; ?>
						<?php echo '</div>'; ?>
						<?php echo '<div class="col-xs-12 col-md-5  content-block justify">'; ?>
							<div><?php echo $block_3['txt']; ?></div>
							<?php if ($block_3['btn_link'] && $block_3['btn_txt'] ) : ?>
								<?php echo '<div><a href="'.$block_3['btn_link'].'"><button type="button" class="custom-block_btn">'.$block_3['btn_txt'].'</button></a></div>'; ?>
							<?php endif; ?>
						<?php echo '</div>'; ?>
						
						<?php endif; ?>
					</div>
				</div>
				<?php endif; ?>

				<?php if( $block_4['tit1'] ) : ?>
				<div class="custom-block-page">
					<div class="row">
						<?php if ($block_4['tit1']) :?>
							<?php echo '<div class="col-xs-12 col-md-12 title_2_v2 center animate__animated"><h5># 4</h5><h2>'.$block_4['tit1'].'</h2></div>'; ?>
						<?php endif; ?>						
					</div>
					<div class="row">
						<?php if ( $block_4['txt'] ) :?>
							
								<?php if ( $block_4['btn_link'] && $block_4['btn_txt'] ) : ?>
									<?php echo '<div class="content-block_v2" style="background-image: url('.$block_4['img'].')"><div class="custom-bg-caption"><div>'.$block_4['txt'].'</div> <div><a href="'.$block_4['btn_link'].'"><button type="button" class="custom-block_btn">'.$block_4['btn_txt'].'</button></a></div></div></div>'; ?>
								<?php else : ?>
									<?php echo '<div class="content-block_v2" style="background-image: url('.$block_4['img'].')"><div class="custom-bg-caption"><div>'.$block_4['txt'].'</div></div>'; ?>
								<?php endif; ?>
						<?php endif; ?>
					</div>
					<?php if ($block_4['tit2']) : ?>
						<div class="row"><?php echo '<div class="col-xs-12 col-md-12 title_3_v2"><h3>'.$block_4['tit2'].'</h3></div>'; ?></div>
					<?php endif; ?>
				</div>
				<?php endif; ?>

				<div class="entry-content">					
				<?php
					the_content();

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'remonty' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->

				<?php if ($sub_footer_tit1 && $sub_footer_tit1 == 'Yes') : ?>
					<?php echo '<div class="row"><div class="col-xs-12 col-md-12">'; ?>
					<?php dynamic_sidebar( 'page-footer-1' ); ?>
					<?php echo '</div></div>'; ?>
				<?php endif; ?>

				<?php if ($sub_footer_tit1 && $sub_footer_tit2 == 'Yes') : ?>
					<?php echo '<div class="row"><div class="col-xs-12 col-md-12">'; ?>
					<?php dynamic_sidebar( 'page-footer-2' ); ?>
					<?php echo '</div></div>'; ?>
				<?php endif; ?>

				<?php if ( get_edit_post_link() ) : ?>
					<footer class="entry-footer">
						<?php
						edit_post_link(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Edit <span class="screen-reader-text">%s</span>', 'remonty' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post( get_the_title() )
							),
							'<span class="edit-link">',
							'</span>'
						);
						?>
					</footer><!-- .entry-footer -->
				<?php endif; ?>
			</article><!-- #post-<?php the_ID(); ?> -->
		</div>
	</div>
</div>

