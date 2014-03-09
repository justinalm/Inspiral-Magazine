<?php
/*
Template Name: Archives
*/
get_header(); ?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
    <h2><?php _e( 'Not Found', 'starkers' ); ?></h2>
    <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'starkers' ); ?></p>

    <?php get_search_form(); ?>

<?php endif; ?>

    <article>
        <section>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<p class="date"><?php global
				$wp_query;
				$postid = $wp_query->post->ID;
				echo get_post_meta($postid, 'page_description', true);
				wp_reset_query(); ?>
			</p>
			<ul class="archive-list">
			    <?php wp_get_archives('type=alpha');?>
			</ul>			
        </section>
	</article>

<?php get_footer(); ?>