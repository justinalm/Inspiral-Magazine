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

		<section>
			<h2><?php the_title(); ?></h2>
			<p class="date"><?php starkers_posted_on(); ?></p>

			<?php the_content(); ?>
					
			<?php wp_link_pages( array( 'before' => '<nav>' . __( 'Pages:', 'starkers' ), 'after' => '</nav>' ) ); ?>

			<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'starkers_author_bio_avatar_size', 60 ) ); ?>
				<h2><?php printf( esc_attr__( 'About %s', 'starkers' ), get_the_author() ); ?></h2>
				<?php the_author_meta( 'description' ); ?>
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
						<?php printf( __( 'View all posts by %s &rarr;', 'starkers' ), get_the_author() ); ?>
					</a>
			<?php endif; ?>
		</section>
			
	</article>

	<nav class="next-previous">
		<?php next_post_link('%link'); ?>
        <?php previous_post_link('%link'); ?>
    </nav>

<?php endwhile; // end of the loop. ?>