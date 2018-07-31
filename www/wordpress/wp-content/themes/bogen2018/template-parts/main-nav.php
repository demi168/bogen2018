<?php
/**
 * Template part for displaying posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package bogen2018
 */
?>
<div class="nav__main">
	<div class="nav__main_logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_mark.png" alt="<?php bloginfo('name') ?>"></a>
	</div>
	<a class="nav__button" href="#">
		<span></span>
		<span></span>
		<span></span>
	</a>
	<nav class="nav__wrap">
		<div class="nav__wrap_logo">
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
</div>

<script type="text/javascript">
	$('.nav__button').on('click',function() {
		if( $(this).hasClass('active') ) {
			$(this).removeClass('active');
			$('.nav__wrap').addClass('close').removeClass('open');
		} else {
			$(this).addClass('active');
			$('.nav__wrap').addClass('open').removeClass('close');
		}
	});
</script>
