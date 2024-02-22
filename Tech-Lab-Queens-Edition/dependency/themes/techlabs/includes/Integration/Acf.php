<?php
/**
 * ACF field option settings
 *
 * @package techlabs
 */

namespace Bloomberg\TechLabs\NextJS\Integration;

defined( 'ABSPATH' ) || exit;

final class Acf {

	/**
	 * Class constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_acf_options' ), 99 );
	}

	public function register_acf_options() {
		if ( ! function_exists( 'acf_add_local_field_group' ) ) {
			return;
		}

		acf_add_local_field_group( 
			array(
				'key' => 'group_65c0901b2276f',
				'title' => 'Share Information',
				'fields' => array(
					array(
						'key' => 'field_65d0934c27df2',
						'label' => 'Name',
						'name' => 'name',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'show_in_graphql' => 1,
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_65c0901b3fc93',
						'label' => 'Symbol',
						'name' => 'symbol',
						'aria-label' => '',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'show_in_graphql' => 1,
						'default_value' => '',
						'maxlength' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_65c090343fc94',
						'label' => 'Share Price',
						'name' => 'share_price',
						'aria-label' => '',
						'type' => 'number',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'show_in_graphql' => 1,
						'default_value' => '',
						'min' => '',
						'max' => '',
						'placeholder' => '',
						'step' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_65c090603fc95',
						'label' => '1 Day Change',
						'name' => '1d_change',
						'aria-label' => '',
						'type' => 'number',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'show_in_graphql' => 1,
						'default_value' => '',
						'min' => '',
						'max' => '',
						'placeholder' => '',
						'step' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_65c0907a3fc96',
						'label' => 'Your Shares',
						'name' => 'your_shares',
						'aria-label' => '',
						'type' => 'number',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'show_in_graphql' => 1,
						'default_value' => '',
						'min' => '',
						'max' => '',
						'placeholder' => '',
						'step' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_65c0908d3fc97',
						'label' => 'Average Price',
						'name' => 'avg_price',
						'aria-label' => '',
						'type' => 'number',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'show_in_graphql' => 1,
						'default_value' => '',
						'min' => '',
						'max' => '',
						'placeholder' => '',
						'step' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_65c0909e3fc98',
						'label' => 'Market Value',
						'name' => 'mkt_value',
						'aria-label' => '',
						'type' => 'number',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'show_in_graphql' => 1,
						'default_value' => '',
						'min' => '',
						'max' => '',
						'placeholder' => '',
						'step' => '',
						'prepend' => '',
						'append' => '',
					),
					array(
						'key' => 'field_65c090ae3fc99',
						'label' => 'Your Change',
						'name' => 'your_change',
						'aria-label' => '',
						'type' => 'number',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'show_in_graphql' => 1,
						'default_value' => '',
						'min' => '',
						'max' => '',
						'placeholder' => '',
						'step' => '',
						'prepend' => '',
						'append' => '',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'share',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
				'show_in_rest' => 0,
				'show_in_graphql' => 0,
				'graphql_field_name' => 'shareInformation',
				'map_graphql_types_from_location_rules' => 0,
				'graphql_types' => '',
			) 
		);
	}
}
