<?php
class AnattaDeign_Mitm_Ajax_Handler {

	public function __construct() {
		add_action( 'wp_ajax_send_contact_query', array( $this, 'send_contact_email' ) );
		add_action( 'wp_ajax_nopriv_send_contact_query', array( $this, 'send_contact_email' ) );

		add_action( 'wp_ajax_subscribe_newsletter', array( $this, 'subscribe_user_on_mailchimp' ) );
		add_action( 'wp_ajax_nopriv_subscribe_newsletter', array( $this, 'subscribe_user_on_mailchimp' ) );
	}

	public function send_contact_email() {
		// get form data from the post variable
		$name = isset( $_POST['name'] ) ? $_POST['name'] : false;
		$from_email = isset( $_POST['email'] ) ? $_POST['email'] : false;
		$content = isset( $_POST['content'] ) ? $_POST['content'] : false;

		// get contact email and subject
		$contact_email = get_field( 'contact_email', 'option' );
		$contact_subject = get_field( 'contact_subject', 'option' );

		if ( $from_email && isset( $from_email ) && ! empty( $from_email ) ) {
			$email_body = 'Customer Name: ' . $name . "\n";
			$email_body .= 'Customer Email: ' . $from_email . "\n";
			$email_body .= 'Customer Content: ' . $content . "\n";

			if ( wp_mail( $contact_email, $contact_subject, $email_body ) ) {
				echo json_encode(
					array(
						'status' => 1
					)
				);
			} else {
				echo json_encode(
					array(
						'status' => 0,
						'message' => "We could not register this request at this time, please email us at $contact_email."
					)
				);
			}
		} else {
			echo json_encode(
				array(
					'status' => 0,
					'message' => "We could not register this request at this time, please email us at $contact_email."
				)
			);
		}
		die();
	}

	public function subscribe_user_on_mailchimp() {
		$user_email = isset( $_POST['email'] ) ? $_POST['email'] : false;

		if ( ! empty( $user_email )) {
			if ( class_exists( 'AnattaDesign_Mailchimp' ) && AnattaDesign_Mailchimp::subscribe( $user_email ) ) {
				echo json_encode(
					array(
						'status' => 1
					)
				);
			} else {
				echo json_encode(
					array(
						'status' => 0,
						'message' => "There was an error during registration."
					)
				);
			}
		}
		die();
	}
}

new AnattaDeign_Mitm_Ajax_Handler;