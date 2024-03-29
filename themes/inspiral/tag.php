<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

    <div id="body">
		<h1><?php printf( __( 'Tag Archives: %s', 'starkers' ), '' . single_tag_title( '', false ) . '' ); ?></h1>
        <?php get_template_part( 'loop', 'tag' ); ?>
    </div>

    <?php get_sidebar(); ?>
<?php get_footer(); ?>