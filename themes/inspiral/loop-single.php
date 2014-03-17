<?php
/**
 * The loop that displays a single post.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<section class="banner">
            <?php if(has_post_thumbnail()): ?>
                <div class="post-banner" style="background-size: cover;  background-position: center; background-image: url( 
                        <?php
                         $img_id = get_post_thumbnail_id();
                         $img_url = wp_get_attachment_image_src($img_id, true);
                         echo $img_url[0];
                        ?>
                     );">
                    <div class="banner-text-container">
                        <h1 class="banner"><?php the_title(); ?></h1>
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

			<?php the_content(); ?>
					
			<?php wp_link_pages( array( 'before' => '<nav>' . __( 'Pages:', 'starkers' ), 'after' => '</nav>' ) ); ?>

			<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
				<div class="post-author">
                    <div class="gravatar">
                        <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'starkers_author_bio_avatar_size', 275 ) ); ?>
                    </div>
                    <div class="author-text">
                        <h2 class="author-bio-title"><?php printf( esc_attr__( 'Interview by %s', 'starkers' ), get_the_author() ); ?></h2>
                        <p><?php the_author_meta( 'description' ); ?></p>
                    </div>
                </div>
			<?php endif; ?>
		</section>
    			
	</article>

	<nav class="next-previous">
        <li><?php next_post_link('%link'); ?></li>
		<li><?php previous_post_link('%link'); ?></li>
    </nav>

<?php endwhile; // end of the loop. ?>