<?php get_header(); ?>
	<div class="content__container">
		<div class="content__breadcrumbs">
    	<?php if(function_exists('bcn_display')){ bcn_display(); }?>
		</div>
		<!-- Article Single -->
		<section class="section section__flex">
			<!-- Side Navigation -->
			<?php get_template_part( 'template-parts/main-nav' ); ?>

			<div class="page__single content__contents">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'page' );
				endwhile; // End of the loop.
				?>
			</div><!-- /.article__single -->
		</section>
	</div><!-- /.content__container -->

<?php get_footer(); ?>
