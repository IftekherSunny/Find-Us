<?php

/** Enqueue style */
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'find-us-style', plugins_url() . '/find-us/src/css/main.css', [], '1.0.0');
});

/** Autoload all dependencies */
require_once __DIR__ . '/../vendor/autoload.php';

/** Bootstrapping all required filter hooks */
require_once __DIR__ . '/filters/bootstrap.php';

/** Bootstrapping all required settings */
require_once __DIR__ . '/settings/bootstrap.php';