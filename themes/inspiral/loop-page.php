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
			<section>
				<?php if ( is_front_page() ) { ?>
					<h1><?php the_title(); ?></h1>
					<p><?php global
						$wp_query;
						$postid = $wp_query->post->ID;
						echo get_post_meta($postid, 'page_description', true);
						wp_reset_query(); ?>
					</p>
				<?php } else { ?>	
					<h1><?php the_title(); ?></h1>
					<p class="date"><?php global
						$wp_query;
						$postid = $wp_query->post->ID;
						echo get_post_meta($postid, 'page_description', true);
						wp_reset_query(); ?>
					</p>
				<?php } ?>
				<?php the_content(); ?>
			</section>
		</article>
<?php endwhile; ?>