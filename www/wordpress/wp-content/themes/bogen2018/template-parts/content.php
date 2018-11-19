<article id="post_<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post__header">
		<?php
			the_title( '<h1 class="post__header_title">', '</h1>' );
			if ( 'post' === get_post_type() ) :
		?>
		<?php endif; ?>
		<!-- カスタムフィールド：English_Title があれば表示 -->
		<?php $customfield = get_post_meta($post->ID, 'English_Title', true); ?>
		<?php if( empty($customfield) ): ?>
			<?php else: ?>
				<h2 class="post__header_title_english"><?php echo post_custom('English_Title'); ?></h2>
		<?php endif; ?>

		<p class="post__header_meta">
			<?php bogen2018_entry_footer(); ?>
		</p>
		<p class="post__header_meta">
			<?php the_time('Y.m.d'); ?>
			by
			<?php the_author_posts_link(); ?>
		</p>
	</header>

	<div class="post__content">
	<?php
		the_content( sprintf(
			wp_kses(
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

	<?php $customfield = get_post_meta($post->ID, 'English', true); ?>
	<?php if( empty($customfield) ): ?>
		<!-- カスタムフィールド：English があれば表示 -->
		<?php else: ?>
		<div class="post__content post__content_english">
			<?php echo post_custom('English'); ?>
		</div>
	<?php endif; ?>

	<!-- プロフィール -->
	<?php if ( function_exists( 'wpsabox_author_box' ) ) echo wpsabox_author_box(); ?>

	<?php $customfield = get_post_meta($post->ID, '商品リンク', true); ?>
	<?php if( empty($customfield) ): ?>
		<!-- カスタムフィールド：商品リンクがあれば表示 -->
		<?php else: ?>
		<a href="<?php echo esc_html( $post->商品リンク ); ?>" target="_blank" class="button button__black">
			購入する
		</a>
	<?php endif; ?>
	</div><!-- .post__content -->
</article>
