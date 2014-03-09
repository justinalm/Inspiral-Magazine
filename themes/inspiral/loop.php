<?php
/**
 * The loop that displays posts.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>
 
<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
    <h2><?php _e( 'Not Found', 'starkers' ); ?></h2>
    <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'starkers' ); ?></p>
    <?php get_search_form(); ?>
<?php endif; ?>
 
<?php while ( have_posts() ) : the_post(); ?>
     
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     
        <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'starkers' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

        <p class="date"><?php starkers_posted_on(); ?></p>

<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
            <?php the_excerpt(); ?>
<?php else : ?>
            <?php the_content( __( 'Continue reading &rarr;', 'starkers' ) ); ?>
             
            <?php wp_link_pages( array( 'before' => '<nav>' . __( 'Pages:', 'starkers' ), 'after' => '</nav>' ) ); ?>
<?php endif; ?>

<!-- Posted in Category and Leave A Comment -->
            <?php
                $tags_list = get_the_tag_list( '', ', ' );
                if ( $tags_list ):
            ?>
            <?php printf( __( 'Tagged %2$s', 'starkers' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?> |
            <?php endif; ?>
            <?php /* Display navigation to next/previous pages when applicable */ ?>
        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
        <?php endif; ?>
	</article>

    <nav class="next-previous">
        <?php previous_post_link('%link'); ?>
        <?php next_post_link('%link'); ?>
    </nav>
 
<?php endwhile; // End the loop. Whew. ?>