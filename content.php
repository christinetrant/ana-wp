<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

?>

		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Post title. Only visible to screen readers. */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ana-wp' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

// 		wp_link_pages(
// 			array(
// 				'before' => '<div class="page-links">' . __( 'Pages:', 'ana-wp' ),
// 				'after'  => '</div>',
// 			)
// 		);
		?>
		