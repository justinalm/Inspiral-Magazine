<?php
/**
 * The template for displaying 404 pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

    <div id="body">
        <h1><?php _e( 'Not Found', 'starkers' ); ?></h1>
        <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'starkers' ); ?></p>
        <?php get_search_form(); ?>

    	<script type="text/javascript">
    		// focus on search field after it has loaded
    		document.getElementById('s') && document.getElementById('s').focus();
    	</script>
    </div>

    <?php get_sidebar(); ?>
<?php get_footer(); ?>