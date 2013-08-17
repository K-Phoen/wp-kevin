<?php

/**
 * Sets up theme defaults and registers the various WordPress features that
 * the theme supports.
 */
function wp_kevin_setup() {
    /*
     * Makes Twenty Thirteen available for translation.
     *
     * Translations can be added to the /languages/ directory.
     */
    load_theme_textdomain('wp_kevin', get_template_directory() . '/languages');

    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support('automatic-feed-links');

    /*
     * Theme specific fonts
     */
    add_editor_style(array(wp_kevin_fonts_url()));

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
add_action('after_setup_theme', 'wp_kevin_setup');

function new_excerpt_more($more) {
    return ' &hellip; <a href="'. get_permalink() . '" class="readmore">Lire la suite &rarr;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Returns the Google font stylesheet URL, if available.
 *
 * The use of Source Sans Pro and Bitter by default is localized. For languages
 * that use characters not supported by the font, the font can be disabled.
 *
 * @return string Font stylesheet or empty string if disabled.
 */
function wp_kevin_fonts_url() {
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
     * supported by Source Sans Pro, translate this to 'off'. Do not translate
     * into your own language.
     */
    $source_sans_pro = _x('on', 'Source Sans Pro font: on or off', 'wp_kevin');

    /* Translators: If there are characters in your language that are not
     * supported by Bitter, translate this to 'off'. Do not translate into your
     * own language.
     */
    $bitter = _x('on', 'Bitter font: on or off', 'wp_kevin');

    if ('off' !== $source_sans_pro || 'off' !== $bitter) {
        $font_families = array();

        if ('off' !== $source_sans_pro)
            $font_families[] = 'Source Sans Pro:300,400,700,300italic,400italic,700italic';

        if ('off' !== $bitter)
            $font_families[] = 'Bitter:400,700';

        $query_args = array(
            'family' => urlencode(implode('|', $font_families)),
            'subset' => urlencode('latin,latin-ext'),
       );
        $fonts_url = add_query_arg($query_args, "//fonts.googleapis.com/css");
    }

    return $fonts_url;
}

/**
 * Enqueues scripts and styles for front end.
 */
function wp_kevin_scripts_styles() {
    // Add Open Sans and Bitter fonts, used in the main stylesheet.
    wp_enqueue_style('wp_kevin-fonts', wp_kevin_fonts_url(), array(), null);

    // Add font-awesome, used in the main stylesheet.
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), null);
}
add_action('wp_enqueue_scripts', 'wp_kevin_scripts_styles');

if ( ! function_exists( 'wp_kevin_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own wp_kevin_entry_meta() to override in a child theme.
 *
 * @return void
 */
function wp_kevin_entry_meta() {
    echo '<ul>';

    // publication date
    echo sprintf('<li><i class="icon-time"></i> %s <span>/</span></li>', get_the_date());

    // author
    echo sprintf('<li><i class="icon-user"></i> %s <span>/</span></li>', get_the_author());

    // categories
    echo sprintf('<li><i class="icon-folder-open"></i> %s <span>/</span></li>', get_the_category_list(__(', ', 'wp_kevin')));

    // comments
    echo sprintf('<li><i class="icon-comments"></i> <a href="%s">', get_comments_link());
    comments_number('Aucun commentaire', 'Un commentaire', '%s commentaires');
    echo '</a></li>';
    echo '</ul>';
}
endif;
