<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bogen2018
 */

<?php
	global $this_category;
	$categories = get_categories(array(
		'child_of' => $this_category->term_id,
		'taxonomy' => 'category'
	));
	if ($categories):
?>
<ul>
	<?php foreach($categories as $value): ?>
		<li><a href="<?= esc_url(get_category_link($value->term_id)) ?>"><?= esc_html($value->name) ?></a></li>
	<?php endforeach; ?>
</ul>
<?php endif; // $categories ?>


if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
