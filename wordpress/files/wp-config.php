<?php
/**
 * this file is managed by salt, please edit it in /srv/salt. If you edit 
 * it here, it will be clobbered.
 *
 * This file has been modified immensely from the original wp-config.php
 * and only contains configurations to determine which actual wp-config.php
 * to load. Please add custom configuration filename to the matching
 * below.
 *
 * @package WordPress
 */

switch ($_SERVER['HTTP_HOST']) {

    case 'sexysexypenguins.com':
    case 'www.sexysexypenguins.com':
        $config_file = 'wp-config.ssp.php';
        break;
    
    default:
        $config_file = 'wp-config.ssp.php';
}

$path = dirname(__FILE__) . '/';
if (file_exists($path . $config_file)) {
    // include the config file if it exists, otherwise WP is going to fail
    require_once $path . $config_file;
}

