<?php

/*
Plugin Name: Anatta Design Custom Post Types
Plugin URI:
Description: Adds all the custom post types
Author: AnattaDesign
Version: 1.0
Author URI: http://anattadesign.com/
*/

class AnattaDesign_Custom_Post_Types {

	public function __construct() {
		add_action('init', array($this, 'register_post_types'));
	}

	public function register_post_types() {

		/**
		 * Epic
		 */
		$args = array(
			'label' => __('Collection'),
			'singular_label' => __('collection'),
			'public' => true,
			'show_ui' => true,
			'has_archive' => 'collection',
			'menu_position' => 5,
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
				'custom-fields',
				'revision',
				'excerpt'
			)
		);

		register_post_type('collection', $args);
	}
}

new AnattaDesign_Custom_Post_Types();