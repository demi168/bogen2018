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
	</footer><!-- #colophon -->
</div><!-- #page -->

<script>
	$(function(){
		$("#index__main_image").backstretch("<?php echo get_template_directory_uri(); ?>/images/index/01.jpg");
	});
</script>

</body>
</html>
