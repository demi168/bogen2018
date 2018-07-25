<?php get_header(); ?>

		<div class="content__container">
			<!-- Article Lists -->
			<section>
				<h1>BLOG</h1>
				<div class="article__unit_list">
					<?php
						$arg = array(
							'posts_per_page' => 8, // 表示する件数
							'category_name' => 'blog' // 表示したいカテゴリーのスラッグを指定
						);
						$posts = get_posts( $arg );
						if( $posts ):
					?>
			    <?php foreach($posts as $post) : setup_postdata($post); ?>
			      <article class="article__unit">
							<div  class="article__unit_thumb">
								<a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail()) : ?>
										<?php the_post_thumbnail('thumbnail'); ?>
									<?php else : ?>
										<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
									<?php endif ; ?>
								</a>
							</div>
							<header>
								<h1 class="article__unit_title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>
								<p class="article__unit_info">
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
			<section>
				<h1>PRODUCTS</h1>
				<div class="article__unit_list">
					<?php
						$arg = array(
							'posts_per_page' => 3, // 表示する件数
							'category_name' => 'shop' // 表示したいカテゴリーのスラッグを指定
						);
						$posts = get_posts( $arg );
						if( $posts ):
					?>
			    <?php foreach($posts as $post) : setup_postdata($post); ?>
			      <article class="article__unit_product">
							<div  class="article__unit_thumb">
								<a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail()) : ?>
										<?php the_post_thumbnail('thumbnail'); ?>
									<?php else : ?>
										<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
									<?php endif ; ?>
								</a>
							</div>
							<header>
								<h1 class="article__unit_title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>
								<p class="article__unit_info">
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

			<!-- Column Lists -->
			<section>
				<h1>COLUMN</h1>
				<div class="article__unit_list">
					<?php
						$arg = array(
							'posts_per_page' => 2, // 表示する件数
							'category_name' => 'blog' // 表示したいカテゴリーのスラッグを指定
						);
						$posts = get_posts( $arg );
						if( $posts ):
					?>
			    <?php foreach($posts as $post) : setup_postdata($post); ?>
			      <article class="article__unit_column">
							<div  class="article__unit_thumb">
								<a href="<?php the_permalink(); ?>">
									<?php if (has_post_thumbnail()) : ?>
										<?php the_post_thumbnail('thumbnail'); ?>
									<?php else : ?>
										<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
									<?php endif ; ?>
								</a>
							</div>
							<header>
								<h1 class="article__unit_title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>
								<p class="article__unit_info">
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
	</main><!-- /#main -->

<?php get_footer(); ?>
