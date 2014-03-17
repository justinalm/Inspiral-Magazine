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
    <h1><?php _e( 'Not Found', 'starkers' ); ?></h1>
    <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'starkers' ); ?></p>
    <?php get_search_form(); ?>
<?php endif; ?>
 
<?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <section class="banner">
            <?php if(has_post_thumbnail()): ?>
                <div class="post-banner" style="background-size: cover; background-position: center; background-image: url( 
                        <?php
                         $img_id = get_post_thumbnail_id();
                         $img_url = wp_get_attachment_image_src($img_id, true);
                         echo $img_url[0];
                        ?>
                     );">
                    <div class="banner-text-container">
                        <h1 class="banner"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p class="date"><?php starkers_posted_on(); ?></br>
                        <!-- Tag List -->
                        <?php
                            $tags_list = get_the_tag_list( '', ', ' );
                            if ( $tags_list ):
                        ?>
                        <small><?php printf( __( '· %2$s', 'starkers' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
                        <?php endif; ?>·</small></p>
                    </div>
                </div>
            <?php else: ?>
                <h1><?php the_title(); ?></h1>
                <p class="date"><?php starkers_posted_on(); ?></br>
                <!-- Tag List -->
                <?php
                    $tags_list = get_the_tag_list( '', ', ' );
                    if ( $tags_list ):
                ?>
                <small><?php printf( __( '· %2$s', 'starkers' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
                <?php endif; ?>·</small></p>
            <?php endif ?>
        </section><!-- End of the Banner -->

        <section>

            <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
                <?php the_excerpt(); ?>
            <?php else : ?>
            <?php the_content( __( 'Continue reading &rarr;', 'starkers' ) ); ?>

                <?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
                <div class="post-author">
                    <div class="gravatar">
                        <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'starkers_author_bio_avatar_size', 275 ) ); ?>
                    </div>
                    <div class="author-text">
                        <h2 class="author-bio-title"><?php printf( esc_attr__( 'About %s', 'starkers' ), get_the_author() ); ?></h2>
                        <p><?php the_author_meta( 'description' ); ?></p>
                    </div>
                </div>
            <?php endif; ?>
                 
                <?php wp_link_pages( array( 'before' => '<nav>' . __( 'Pages:', 'starkers' ), 'after' => '</nav>' ) ); ?>
            <?php endif; ?>

            <!-- Pagination -->
            <?php /* Display navigation to next/previous pages when applicable */ ?>
            <?php if (  $wp_query->max_num_pages > 1 ) : ?>
            <?php endif; ?>
        </section>

	</article>

    <nav class="next-previous">
        <li><?php next_post_link('%link'); ?></li>
        <li><?php previous_post_link('%link'); ?></li>
    </nav>
 
<?php endwhile; // End the loop. Whew. ?>