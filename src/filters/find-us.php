<?php

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) exit;

/** Register find us filter */
add_filter('the_content', function ($content) {

    if(!is_single() or !(find_us_facebook_is_enable() or find_us_twitter_is_enable()) ) {
        return $content;
    }

    $facebookUsername = find_us_get_facebook_username();

    $twitterUsername = find_us_get_twitter_username();

    return find_us_view('filters/find-us.php', compact('content', 'facebookUsername', 'twitterUsername'));
});