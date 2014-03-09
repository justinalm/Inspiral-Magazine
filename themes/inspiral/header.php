<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <script type="text/javascript" src="//use.typekit.net/jee6ubp.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>Inspiral Magazine <?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/styles.css" />
    <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <?php
        /* We add some JavaScript to pages with the comment form
         * to support sites with threaded comments (when in use).
         */
        if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );
     
        /* Always have wp_head() just before the closing </head>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to add elements to <head> such
         * as styles, scripts, and meta tags.
         */
        wp_head();
    ?>
</head>
 
<body <?php body_class(); ?>>

<div id="accessibility">

</div>
<div id="wrapper">
 
    <header id="pageTop" role="banner">
        <<?php echo is_front_page() ? 'h1' : 'div'; ?> id="logo"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></<?php echo is_front_page() ? 'h1' : 'div'; ?>>
 
        <?php wp_nav_menu( array( 'container'=>'nav', 'container_id'=>'mainNav', 'container_class'=>'', 'theme_location'=>'primary' ) ); ?>
    </header>

    <div id="content">