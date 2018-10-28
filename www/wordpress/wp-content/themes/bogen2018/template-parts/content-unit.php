<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bogen2018
 */
?>

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
