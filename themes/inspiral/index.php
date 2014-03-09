<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>
 
    <div id="body">
        <?php get_template_part( 'loop', 'index' ); ?>
    </div>
    
<?php get_footer(); ?>