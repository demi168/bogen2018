<?php
/**
 * Template part for displaying posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package bogen2018
 */
?>
<nav class="nav__main">
	<div class="nav__main_logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_mark.png" alt="<?php bloginfo('name') ?>"></a>
	</div>
	<?php wp_nav_menu( $args ); ?>
	<div class="nav__main_link">
		<span>
			<a href="https://www.facebook.com/BOGEN-100109856823061/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_facebook.png" alt="follow on Facebook"></a>
		</span>
		<span>
			<a href="https://twitter.com/bogenskier"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_twitter.png" alt="follow on Twitter"></a>
		</span>
		<span>
			<a href="https://www.instagram.com/skishopbogen/"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_instagram.png" alt="follow on Instagram"></a>
		</span>
	</div>
</nav>
