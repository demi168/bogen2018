<?php
/**
 * Template part for displaying posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package bogen2018
 */
?>

<article id="post_<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post__header">
		<?php
			the_title( '<h1 class="post__header_title">', '</h1>' );
			if ( 'post' === get_post_type() ) :
		?>
		<?php endif; ?>
		<p class="post__header_meta">
			<?php bogen2018_entry_footer(); ?>
		</p>
		<p class="post__header_meta">
			<?php the_time('Y.m.d'); ?>
		</p>
	</header>

	<?php bogen2018_post_thumbnail(); ?>

	<div class="post__content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bogen2018' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bogen2018' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .post__content -->
</article><!-- #post-<?php the_ID(); ?> -->
