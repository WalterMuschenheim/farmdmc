<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Farm_DMC
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php /*the_title( '<h1 class="entry-title">', '</h1>' );*/ ?>
	</header><!-- .entry-header -->

	<?php farmdmc_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		/*** Jumbotron ***/
		/* check to make sure Jumbotron isn't an empty array */
		$jubotronCheck = get_field('jumbotron');
		$delete = '';
		foreach($jubotronCheck as $currentField):
			if($currentField == ''):
				print_r($currentField);
				$delete = true;
				echo $delete;
				//break;
			else:
				$delete = false;
				echo "<p>".$delete."</p>";
				break;
			endif;
		endforeach;

		if($delete):
			delete_field('jumbotron');
		endif;
		/* get Jumbotron section */
		if (have_rows('jumbotron')) :
			get_template_part('sections/section', 'jumbotron');
		endif;

		/*** Card Deck ***/
		/* get Card Deck section */
		if (have_rows('card_deck')) :
			get_template_part('sections/section', 'card-deck');
        endif;

		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'farmdmc' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'farmdmc' ),
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
