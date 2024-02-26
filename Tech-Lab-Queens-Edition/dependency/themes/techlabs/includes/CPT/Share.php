<?php

namespace Bloomberg\TechLabs\NextJS\CPT;

defined( 'ABSPATH' ) || exit;

/**
 * Configure share post type
 */
class Share {

	/**
	 * Class constructor
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_post_type_share' ) );
	}

	/**
	 * Post type for share
	 */
	public function register_post_type_share() {
		$labels = array(
			'name'                     => _x( 'Shares', 'post type general name', 'techlabs' ),
			'singular_name'            => _x( 'Share', 'post type singular name', 'techlabs' ),
			'add_new'                  => _x( 'Add New', 'share', 'techlabs' ),
			'add_new_item'             => __( 'Add New Share', 'techlabs' ),
			'edit_item'                => __( 'Edit Share', 'techlabs' ),
			'new_item'                 => __( 'New Share', 'techlabs' ),
			'view_item'                => __( 'View Share', 'techlabs' ),
			'view_items'               => __( 'View Shares', 'techlabs' ),
			'search_items'             => __( 'Search Shares', 'techlabs' ),
			'not_found'                => __( 'No shares found.', 'techlabs' ),
			'not_found_in_trash'       => __( 'No shares found in trash.', 'techlabs' ),
			'parent_item_colon'        => __( 'Parent Share:', 'techlabs' ),
			'all_items'                => __( 'All Shares', 'techlabs' ),
			'archives'                 => __( 'Shares Archive', 'techlabs' ),
			'attributes'               => __( 'Attributes', 'techlabs' ),
			'insert_into_item'         => __( 'Insert into share', 'techlabs' ),
			'uploaded_to_this_item'    => __( 'Uploaded to this share', 'techlabs' ),
			'featured_image'           => __( 'Featured image', 'techlabs' ),
			'set_featured_image'       => __( 'Set featured image', 'techlabs' ),
			'remove_featured_image'    => __( 'Remove featured image', 'techlabs' ),
			'use_featured_image'       => __( 'Use as featured image', 'techlabs' ),
			'menu_name'                => _x( 'Shares', 'admin menu', 'techlabs' ),
			'name_admin_bar'           => _x( 'Share', 'add new on admin bar', 'techlabs' ),
			'item_published'           => __( 'Share published', 'techlabs' ),
			'item_published_privately' => __( 'Share published privately', 'techlabs' ),
			'item_reverted_to_draft'   => __( 'Share is now a draft', 'techlabs' ),
			'item_scheduled'           => __( 'Share is scheduled to be published', 'techlabs' ),
			'item_updated'             => __( 'Share updated', 'techlabs' ),
		);
		$args   = array(
			'labels'          => $labels,
			'description'     => __( 'Available shares', 'techlabs' ),
			'public'          => true,
			'menu_icon'       => 'dashicons-chart-line',
			'supports'        => array( 'title', 'editor', 'excerpt', 'revisions' ),
			'show_in_rest'    => true,
			'show_in_menu' => true,
			'menu_position' => 20,
			'has_archive' => true,

		);

		register_post_type( 'share', $args );
	}
}
