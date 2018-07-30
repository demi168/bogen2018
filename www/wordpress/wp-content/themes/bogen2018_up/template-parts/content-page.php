<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package bogen2018
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php bogen2018_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bogen2018' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
