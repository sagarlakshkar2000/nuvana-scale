<?php
/**
 * Headless WordPress Theme Index
 * 
 * This file intercepts any frontend request to WordPress and redirects 
 * it to the corresponding Laravel route.
 */

// If it's a preview of a post
if ( is_preview() || (isset($_GET['preview']) && $_GET['preview'] == 'true') ) {
    $preview_id = get_the_ID();
    if (!$preview_id && isset($_GET['p'])) {
        $preview_id = $_GET['p'];
    }
    wp_redirect( '/blog/preview/' . $preview_id );
    exit;
}

// If it's viewing a single published post
if ( is_single() ) {
    global $post;
    wp_redirect( '/blog/' . $post->post_name );
    exit;
}

// Any other frontend page (like the WordPress homepage), redirect to Laravel's blog index
wp_redirect( '/blog' );
exit;
