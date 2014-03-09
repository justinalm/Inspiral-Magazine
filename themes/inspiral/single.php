<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

    <div id="body">
    	<?php get_template_part( 'loop', 'single' ); ?>
    </div>

<?php get_footer(); ?>