
		<footer class="site-footer">
			<p class="site-footer__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_type.png" alt="<?php bloginfo('name') ?>"></a>
			</p>
			<p class="site-footer__info">
				<a href="http://shop.bogen.jp/?mode=sk#info" target="_blank">特定商取引法に基づく表示</a>
				<span class="sep"> | </span>
				<a href="mailto:otoiawase@bogen.jp">お問い合わせ</a>
			</p>
			<p class="site-footer__info">
				Copyright &copy; Emo inc.
			</p>
		</footer>
	</main>
</div><!-- .site -->

<script>
  // Duration is the amount of time in between slides,
  // and fade is value that determines how quickly the next image will fade in
	$(function(){
		$("#index__main_image").backstretch([
      "<?php echo get_template_directory_uri(); ?>/images/index/01.jpg",
			"<?php echo get_template_directory_uri(); ?>/images/index/02.jpg",
			"<?php echo get_template_directory_uri(); ?>/images/index/03.jpg",
			"<?php echo get_template_directory_uri(); ?>/images/index/04.jpg",
			"<?php echo get_template_directory_uri(); ?>/images/index/05.jpg"
  	], {duration: 3000, fade: 750});
	});
</script>

</body>
</html>
