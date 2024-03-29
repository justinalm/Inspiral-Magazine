<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>
 
    <?php if ( have_posts() ) the_post(); ?>
    
    <div id="body">
        <h1>
            <?php printf( __( 'Author Archives: %s', 'starkers' ), "<span class='vcard'><a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a></span>" ); ?>
        </h1>

    <?php if ( get_the_author_meta( 'description' ) ) : ?>
        <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'starkers_author_bio_avatar_size', 60 ) ); ?>
        <h2><?php printf( __( 'About %s', 'starkers' ), get_the_author() ); ?></h2>
        <?php the_author_meta( 'description' ); ?>
    <?php endif; ?>
     
        <?php
            rewind_posts();
            get_template_part( 'loop', 'author' );
        ?>
    </div>
     
    <?php get_sidebar(); ?>
<?php get_footer(); ?>