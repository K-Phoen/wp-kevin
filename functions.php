<?php

/**
 * Sets up theme defaults and registers the various WordPress features that
 * the theme supports.
 */
function wp_vjousse_setup() {
    /*
     * Makes Twenty Thirteen available for translation.
     *
     * Translations can be added to the /languages/ directory.
     * If you're building a theme based on Twenty Thirteen, use a find and
     * replace to change 'twentythirteen' to the name of your theme in all
     * template files.
     */
    load_theme_textdomain('wp_vjousse', get_template_directory() . '/languages');

    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support('automatic-feed-links' );

    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list'));

    /**
     * This theme supports all available post formats by default.
     * See http://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array(
        'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
    ));
}
add_action('after_setup_theme', 'wp_vjousse_setup');

function new_excerpt_more($more) {
    return ' &hellip; <a href="'. get_permalink() . '" class="readmore">Lire la suite &rarr;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
