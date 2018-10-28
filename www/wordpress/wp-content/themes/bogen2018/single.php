<?php get_header(); ?>

	<div class="content__container">
		<div class="content__breadcrumbs">
    	<?php if(function_exists('bcn_display')){ bcn_display(); }?>
		</div>
		<!-- Article Single -->
		<section class="section section__flex">
			<!-- Side Navigation -->
			<?php get_template_part( 'template-parts/main-nav' ); ?>

			<div class="article__single content__contents">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile; // End of the loop.
				?>

				<div class="article__list">
					<?php
						$post_id = get_the_ID();
						foreach((get_the_category()) as $cat) {
							$cat_id = $cat->cat_ID ;
							break ;
						}
						query_posts(
							array(
								'cat' => $cat_id,
								'showposts' => 6,
								'post__not_in' => array($post_id)
							)
						);
						if(have_posts()) :
					?>
					<?php while (have_posts()) : the_post(); ?>
					<article class="article__list_unit">
						<div class="article__list_unit_thumb">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
							</a>
						</div>
						<header>
							<h1 class="article__list_unit_title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h1>
							<p class="article__list_unit_info">
								<span><?php the_time('Y.m.d'); ?></span>
								<span>|</span>
								<span>
									<?php echo get_the_category_list( ' ,' ); ?>
								</span>
							</p>
						</header>
					</article>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div><!-- /.article__list -->

			</div>
		</section>
	</div><!-- /.content__container -->

<?php get_footer(); ?>
