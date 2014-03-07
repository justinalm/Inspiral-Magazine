<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
		<ul>
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
		</ul>
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
		<ul>
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
		</ul>
	<?php endif; ?>