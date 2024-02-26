<?php
/**
 * Set up autoloader and bootstrap the theme
 *
 * @package techlabs-theme
 */

declare(strict_types=1);

defined( 'ABSPATH' ) || exit;

use Bloomberg\TechLabs\NextJS\Bootstrap;

// Use Composer autoload for local development.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	include __DIR__ . '/vendor/autoload.php';
}
/**
 * Initializes the theme
 */
Bootstrap::get_instance();

