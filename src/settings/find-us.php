<?php

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) exit;

/** Register menu page for the find us settings */
add_action('admin_menu', function() {

    add_menu_page('Find Us', 'Find Us', 'manage_options', 'find-us', function () {

        $find_us_options = get_option('find_us_settings');

        echo find_us_view('settings/find-us.php', compact('find_us_options'));

    }, 'dashicons-share', 60);

});

/** Register find us settings */
add_action('admin_init', function () {
   register_setting('find_us_settings_group', 'find_us_settings');
});