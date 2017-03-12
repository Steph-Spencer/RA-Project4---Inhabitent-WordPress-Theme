<?php
/**
 * The sidebar containing the full width image at the top of the page.
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'header-image-sidebar' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'header-image-sidebar' ); ?>
</div><!-- #secondary -->
