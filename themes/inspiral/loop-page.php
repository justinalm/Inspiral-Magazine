<?php
/**
 * The loop that displays a page.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php if ( is_front_page() ) { ?>
				<h2><?php the_title(); ?></h2>
			<?php } else { ?>	
				<h2><?php the_title(); ?></h2>
			<?php } ?>

			<?php the_content(); ?>

		</article>

<?php endwhile; ?>