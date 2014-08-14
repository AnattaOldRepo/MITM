<?php

class AnattaDesign_Mailchimp_API {

	public $api;
	public $key;
	public $list;

	function __construct() {
		if( class_exists( 'acf' ) ) {
			$this->key = get_field( 'anattadesign_mailchimp_key', 'option' );
			$this->list = get_field( 'anattadesign_mailchimp_list', 'option' );
		}

		$this->key = apply_filters( 'anattadesign_mailchimp_key', $this->key );
		$this->list = apply_filters( 'anattadesign_mailchimp_key', $this->list );

		require plugin_dir_path( __FILE__ ) . '/MCAPI.class.php';
		$this->api = new MCAPI( $this->key );

		add_action('wp_ajax_ad_mc_subscribe', array($this, 'mc_subscribe_ajax_callback'));
		add_action('wp_ajax_nopriv_ad_mc_subscribe', array($this, 'mc_subscribe_ajax_callback'));
	}

	function subscribe( $email, $name = '', $group = array() ) {
		$email = trim( $email );

		if( !$email || !is_email( $email ) ) {
			return false;
		}

		$name = trim( $name );

		if( is_array( $group ) ) {
			$group = implode( ',', $group );
		} else {
			$group = trim( (string) $group );
		}

		if( $group ) {
			$grouping = (array) $this->api->listInterestGroupings( $this->list );
			$this->api->listSubscribe( $this->list,
				$email,
				array(
				     'GROUPINGS' => array(
					     array(
						     'groups' => $group,
						     'id'     => $grouping['id']
					     )
				     ),
				     'NAME'      => $name
				),
				'html',
				true,
				true,
				false
			);

			//if that interest group doesn't exist, create it.
			if( 270 == $this->api->errorCode ) {
				$gr = array_map( 'trim', explode( ',', $group ) );
				$group_added = true;
				foreach( $gr as $g ) {
					$this->api->listInterestGroupAdd( $this->list, $g, $grouping['id'] );
					if( 271 == $this->api->errorCode ) {
						$group_added = false;
						$msg = 'Urgent: Mailchimp Cleanup Time';
						$det = "! We couldn't add the new group \"$g\" into the mailchimp list due to mailchimp limits.";
						error_log( $msg . $det );
						if( !get_transient( 'ad_mailchimp_error_271_mail' ) ) {
							wp_mail( get_option( 'admin_email' ), $msg, $det );
							set_transient( 'ad_mailchimp_error_271_mail', '1', 60 * 60 * 24 );
						}
					}
				}
				if( $group_added ) {
					$this->api->listSubscribe( $this->list,
						$email,
						array(
						     'GROUPINGS' => array(
							     array(
								     'groups' => $group,
								     'id'     => $grouping['id']
							     )
						     ),
						     'NAME'      => $name
						),
						'html',
						true,
						true,
						false
					);
				}
			}
		} else {
			$this->api->listSubscribe( $this->list,
				$email,
				array(
				     'NAME' => $name
				),
				'html',
				true,
				true,
				false
			);
		}

		if( $this->api->errorCode && 230 != $this->api->errorCode ) {
			$msg = 'Mailchimp Subscribe Form Error ' . $this->api->errorCode . ': ' . $this->api->errorMessage;

			if( defined( 'WP_DEBUG_LOG' ) && WP_DEBUG_LOG ) {
				error_log( $msg );
			}

			if( defined( 'WP_DEBUG_DISPLAY' ) && WP_DEBUG_DISPLAY ) {
				echo $msg;
			}

			return false;
		} else {
			return true;
		}
	}
}