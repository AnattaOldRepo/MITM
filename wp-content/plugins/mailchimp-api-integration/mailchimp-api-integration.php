<?php

/*
Plugin Name: Mailchimp API Integration plugin
Plugin URI: http://anattadesign.com/
Description: This plugin adds the classes & methods to facilitate themes or other plugin developers to interact with Mailchimp API
Author: Mridul Aggarwal
Version: 1.0
Author URI: http://anattadesign.com/
*/

class AnattaDesign_Mailchimp {
	private $api;

	static $instance;

	function __construct() {
		if( class_exists( 'acf_options_page_plugin' ) && class_exists( 'acf' ) ) {
			require plugin_dir_path( __FILE__ ) . '/acf/options_page.php';
			add_filter( 'acf/options_page/settings', array( $this, 'options_page' ) );
		}

		self::$instance = $this;

		require plugin_dir_path( __FILE__ ) . '/api/mailchimp.php';
		$this->api = new AnattaDesign_Mailchimp_API();
	}

	function options_page( $settings ) {
		if( !isset( $settings['pages'] ) || !is_array( $settings['pages'] ) ) {
			$settings['pages'] = array();
		}

		$settings['pages'][] = 'Mailchimp Integration';

		return $settings;
	}

	static function subscribe( $email, $name = '', $group = array() ) {
		return self::$instance->api->subscribe($email, $name, $group);
	}

	static function subscribe_form( $group = array() ) {
		self::$instance->api->mc_subscribe_form($group);
	}

	static function getAPIObject() {
		return self::$instance->api->api;
	}
}

add_action( 'plugins_loaded', create_function( '', 'new AnattaDesign_Mailchimp();' ), 20 );
