<?php
/**
 * Plugin Name: PHP Multibyte String Polyfills
 * Description: A plugin for providing functionality for the PHP multibyte string module.
 * Plugin URI: https://github.com/aaemnnosttv/wp-mbstring-polyfill
 * Author: Evan Mattson
 * Version: 0.1
 * Update URI: false
 */

// Bail if the minimum PHP version isn't met.
if ( version_compare( phpversion(), '<', '5.3.3' ) ) {
    return;
}

// Load directly to avoid another autoloader.
if ( ! class_exists( 'Symfony\Polyfill\Mbstring\Mbstring', false ) ) {
    require_once __DIR__ . '/vendor/symfony/polyfill-mbstring/Mbstring.php';
}
// Bootstrap the polyfill.
require_once __DIR__ . '/vendor/symfony/polyfill-mbstring/bootstrap.php';
