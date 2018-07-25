<?php get_header(); ?>

		<div class="content__container">
			<!-- Article Lists -->
			<div class="article__unit_list">
		    <?php $posts = get_posts('numberposts=8'); ?>
		    <?php foreach($posts as $post): ?>
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
								<span>カテゴリー</span>
							</p>
						</header>
		      </article>
		    <?php endforeach; ?>
			</div>
		</div><!-- /.content__container -->

	</main><!-- /#main -->

<?php
get_footer();
