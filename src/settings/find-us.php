<?php

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') ) exit;

/** Register menu page for the find us settings */
add_action('admin_menu', function() {

    add_menu_page('Find Us', 'Find Us', 'manage_options', 'find-us', function () {

        $active_tab = get_active_tab();
        $find_us_options_facebook = get_option('find_us_settings_facebook');
        $find_us_options_twitter = get_option('find_us_settings_twitter');

        echo find_us_view('settings/find-us.php', compact('find_us_options_facebook', 'find_us_options_twitter', 'active_tab'));

    }, 'dashicons-share', 60);

});

/** Register find us settings */
add_action('admin_init', function () {
   register_setting('find_us_settings_group_facebook', 'find_us_settings_facebook');
   register_setting('find_us_settings_group_twitter', 'find_us_settings_twitter');
});