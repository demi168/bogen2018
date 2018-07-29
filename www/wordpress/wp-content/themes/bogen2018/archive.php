<?php get_header(); ?>
	<div class="content__container">
		<div class="content__breadcrumbs">
    <?php if(function_exists('bcn_display')){ bcn_display(); }?>
		</div>

		<!-- Article Lists -->
		<section class="section section__flex">
			<!-- Side Navigation -->
			<?php get_template_part( 'template-parts/main-nav' ); ?>

			<?php if ( have_posts() ) : ?>
				<div class="article__list content__contents">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'unit', get_post_type() );
					endwhile;
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div>
		</section>
		<div class="article__list_pagenation">
			<?php
				$big = 9999999999;
				$arg = array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages,
					'prev_text' => "PREV",
					'next_text' => "NEXT"
				);
				echo paginate_links($arg);
			?>
		</div>
	</div><!-- /.content__container -->
</main><!-- /#main -->

<?php get_footer(); ?>
