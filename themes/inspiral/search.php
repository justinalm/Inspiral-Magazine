<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>
    <article>
        <section>
            <?php if ( have_posts() ) : ?>
        		<h1><?php printf( __( 'Search Results for: %s', 'starkers' ), '' . get_search_query() . '' ); ?></h1>
                <?php get_search_form(); ?>
        		<?php get_template_part( 'loop', 'search' ); ?>
            <?php else : ?>
        		<h1><?php _e( 'Still Nothing', 'starkers' ); ?></h1>
        		<p style="text-align:center; margin: 40px auto;"><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with different keywords.', 'starkers' ); ?>
                <?php get_search_form(); ?>
            <script type="text/javascript">
                // focus on search field after it has loaded
                document.getElementById('s') && document.getElementById('s').focus();
            </script></p></p>
            <?php endif; ?>
        </section>
    </article>
<?php get_footer(); ?>