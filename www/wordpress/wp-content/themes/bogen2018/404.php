<?php get_header();?>
	<div class="content__container">

		<section class="section">
			<!-- Side Navigation -->
			<?php get_template_part( 'template-parts/main-nav' ); ?>

			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bogen2018' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<?php
				get_search_form();

				the_widget( 'WP_Widget_Recent_Posts' );
				?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</div><!-- /.content__container -->
</main><!-- /#main -->
<?php get_footer(); ?>
