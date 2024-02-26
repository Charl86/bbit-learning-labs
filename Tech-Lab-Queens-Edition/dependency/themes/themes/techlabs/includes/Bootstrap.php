<?php
/**
 * Bootstrap this theme
 *
 * @package techlabs
 */

namespace Bloomberg\TechLabs\NextJS;

use WP_Post;

defined( 'ABSPATH' ) || exit;

/**
 * Functionality for loading assets, managing theme settings
 */
final class Bootstrap {

	private static Bootstrap $instance;

	/**
	 * Bootstrap constructor.
	 */
	public function __construct() {
		new Assets();
		new CPT\Share();
		new CPT\Source();
		new Rest\TechLabsRoutes();
		new Options\DataOptions();
		new Integration\Acf();
	}

	public static function get_instance() {
		self::$instance = ( self::$instance ?? new self() );
		return self::$instance;
	}
}