<?php
/**
 * The template for displaying Archive pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

	<?php if ( have_posts() ) the_post(); ?>

	<div id="body">
		<h1>
		<?php if ( is_day() ) : ?>
			<?php printf('Daily Archives: %s', get_the_date()); ?>
		<?php elseif ( is_month() ) : ?>
			<?php printf('Monthly Archives: %s', get_the_date('F Y')); ?>
		<?php elseif ( is_year() ) : ?>
			<?php printf('Yearly Archives: %s', get_the_date('Y')); ?>
		<?php else : ?>
			Blog Archives
		<?php endif; ?>
		</h1>

		<?php
			rewind_posts();
			get_template_part( 'loop', 'archive' );
		?>
	</div>

	<?php get_sidebar(); ?>
<?php get_footer(); ?>