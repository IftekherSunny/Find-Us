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
    $find_us_settings = get_option('find_us_settings_facebook');

    return !empty($find_us_settings['username'])? $find_us_settings['username'] : 'profile.php?id=100002837300191';
}

/**
 * Check facebook is enable or not.
 *
 * @return string
 */
function find_us_facebook_is_enable() {
    $find_us_settings = get_option('find_us_settings_facebook');

    return isset($find_us_settings['enable'])? true : false;
}


/**
 * Get twitter username.
 *
 * @return string
 */
function find_us_get_twitter_username() {
    $find_us_settings = get_option('find_us_settings_twitter');

    return !empty($find_us_settings['username'])? $find_us_settings['username'] : 'IftekherSunny';
}

/**
 * Check twitter is enable or not.
 *
 * @return string
 */
function find_us_twitter_is_enable() {
    $find_us_settings = get_option('find_us_settings_twitter');

    return isset($find_us_settings['enable'])? true : false;
}

/**
 * Determine tab activation in the find us settings page.
 *
 * @return string
 */
function get_active_tab() {

    $active_tab = 'facebook';

    if( isset( $_GET[ 'tab' ] ) ) {
        $active_tab = $_GET[ 'tab' ];
    }

    return $active_tab;
}

/**
 * Include partial view.
 *
 * @param string $view
 * @param array  $data
 *
 * @return string
 */
function find_us_include_view($view, $data = []) {
    return find_us_view($view, $data);
}