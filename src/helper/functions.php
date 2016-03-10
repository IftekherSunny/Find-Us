<?php

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) exit;

/**
 * Generate html output
 */
if( ! function_exists('find_us_view')) {
    function find_us_view($viewPath, $data = []) {
        global $find_us_view;

        if( ! isset($find_us_view)) {
            $find_us_view = new FindUs\View(
                __DIR__ . '/../views',
                __DIR__ . '/../compile/views',
                false
            );
        }

        return $find_us_view->render($viewPath, $data);
    }
}

/**
 * Get facebook username.
 *
 * @return string
 */
function find_us_get_facebook_username() {
    $find_us_settings = get_option('find_us_settings');

    return !empty($find_us_settings['facebook_username'])? $find_us_settings['facebook_username'] : 'profile.php?id=100002837300191';
}

/**
 * Check facebook is enable or not.
 *
 * @return string
 */
function find_us_facebook_is_enable() {
    $find_us_settings = get_option('find_us_settings');

    return isset($find_us_settings['facebook_enable'])? true : false;
}


/**
 * Get twitter username.
 *
 * @return string
 */
function find_us_get_twitter_username() {
    $find_us_settings = get_option('find_us_settings');

    return !empty($find_us_settings['twitter_username'])? $find_us_settings['twitter_username'] : 'IftekherSunny';
}

/**
 * Check twitter is enable or not.
 *
 * @return string
 */
function find_us_twitter_is_enable() {
    $find_us_settings = get_option('find_us_settings');

    return isset($find_us_settings['twitter_enable'])? true : false;
}