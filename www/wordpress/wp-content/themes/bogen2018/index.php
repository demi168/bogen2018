<?php get_header(); ?>
	<div class="no-sidebar">

		<div class="content__container">
			<section class="section">
				<?php if(wp_is_mobile()): ?>
					<?php get_template_part( 'template-parts/main-nav' ); ?>
				<?php else: ?>
				<?php endif; ?>
				<div class="index__page_header">
					<?php if(!wp_is_mobile()): ?>
						<?php get_template_part( 'template-parts/main-nav-index' ); ?>
					<?php else: ?>
					<?php endif; ?>
					<div id="index__main_image"></div>
				</div>
			</section>
		</div>

		<div class="content__container">
			<!-- Article Lists -->
			<section class="section">
				<h1 class="section__caption">BLOG</h1>
				<div class="article__list">
					<?php
						$arg = array(
							'posts_per_page' => 8, // 表示する件数
							'category_name' => 'blog' // 表示したいカテゴリーのスラッグを指定
						);
						$posts = get_posts( $arg );
						if( $posts ):
					?>
			    <?php foreach($posts as $post) : setup_postdata($post); ?>
			      <article class="article__list_unit blog">
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
			    <?php endforeach; ?>
				</div>
				<?php
					endif;
					wp_reset_postdata();
				?>
			</section>

			<!-- Product Lists -->
			<section class="section">
				<h1 class="section__caption">PRODUCTS</h1>
				<div class="article__list">
					<?php
						$arg = array(
							'posts_per_page' => 3, // 表示する件数
							'category_name' => 'products' // 表示したいカテゴリーのスラッグを指定
						);
						$posts = get_posts( $arg );
						if( $posts ):
					?>
			    <?php foreach($posts as $post) : setup_postdata($post); ?>
			      <article class="article__list_unit product">
							<div  class="article__list_unit_thumb">
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
			    <?php endforeach; ?>
				</div>
				<?php
					endif;
					wp_reset_postdata();
				?>
			</section>

			<!-- B-side Lists -->
			<section class="section">
				<h1 class="section__caption">B-SIDE</h1>
				<div class="article__list">
					<?php
						$arg = array(
							'posts_per_page' => 2, // 表示する件数
							'category_name' => 'b-side' // 表示したいカテゴリーのスラッグを指定
						);
						$posts = get_posts( $arg );
						if( $posts ):
					?>
					<?php foreach($posts as $post) : setup_postdata($post); ?>
						<article class="article__list_unit b-side">
							<div  class="article__list_unit_thumb">
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
								</a>
							</div>
							<header>
								<h1 class="article__list_unit_title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>
								<p class="article__list_unit_info">
									<a href="<?php the_permalink(); ?>">
										<span><?php the_author(); ?></span>
										<span>
											vol.<?php the_author_posts(); ?>
										</span>
									</a>
								</p>
								<p class="article__list_unit_info">
									<span><?php the_time('Y.m.d'); ?></span>
									<span>|</span>
									<span>
										<?php echo get_the_category_list( ' ,' ); ?>
									</span>
								</p>
							</header>
						</article>
					<?php endforeach; ?>
				</div>
				<?php
					endif;
					wp_reset_postdata();
				?>
			</section>

		</div><!-- /.content__container -->
	</div>
</main><!-- /#main -->

<?php get_footer(); ?>
