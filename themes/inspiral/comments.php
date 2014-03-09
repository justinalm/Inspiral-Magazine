<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to starkers_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

<section id="comments">

<?php if ( post_password_required() ) : ?>
	<p>This post is password protected. Enter the password to view any comments.</p>
	<?php return; ?>
<?php endif; ?>

<?php if ( have_comments() ) : ?>

	<?php /* STARKERS NOTE: The following h3 id is left intact so that comments can be referenced on the page */ ?>
	<h3><?php
		printf( _n( 'Responses to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'starkers' ),
		number_format_i18n( get_comments_number() ), '' . get_the_title() . '' );
	?></h3>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav>
			<?php previous_comments_link( __( '&larr; Older Comments', 'starkers' ) ); ?>
			<?php next_comments_link( __( 'Newer Comments &rarr;', 'starkers' ) ); ?>
		</nav>
	<?php endif; // check for comment navigation ?>

	<?php
		wp_list_comments( array( 'style' => 'div', 'callback' => 'starkers_comment', 'end-callback' => 'starkers_comment_close' ) );
	?>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav>
			<?php previous_comments_link( __( '&larr; Older Comments', 'starkers' ) ); ?>
			<?php next_comments_link( __( 'Newer Comments &rarr;', 'starkers' ) ); ?>
		</nav>
	<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments: ?>

	<?php if ( ! comments_open() ) : ?>
		<p class="closed">Comments are closed.</p>
	<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

</section>

<?php comment_form( array( 'comment_notes_after'=>'', 'comment_field'=>'<dl class="comment-form-comment"><dt><label for="comment">' . _x( 'Comment', 'noun' ) . '</label></dt><dd><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></dt></dl>' ) ); ?>