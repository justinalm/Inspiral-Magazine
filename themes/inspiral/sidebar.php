<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	<aside id="sidebar">
	
	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
		<ul>
			<?php dynamic_sidebar( 'primary-widget-area' ) ?>
		</ul>
	<?php endif; ?>
	
	<?php if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
		<ul>
			<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
		</ul>
	<?php endif; ?>
	
	</aside>