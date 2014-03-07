<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

    <div id="body">
    	<h1><?php printf('Category Archives: %s', '' . single_cat_title( '', false ) . ''); ?></h1>
    	<?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';

            get_template_part( 'loop', 'category' );
    	?>
    </div>

    <?php get_sidebar(); ?>
<?php get_footer(); ?>