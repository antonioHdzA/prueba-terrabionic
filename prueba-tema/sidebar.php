<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prueba
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="large-3 columns">
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : endif ?>
</aside>