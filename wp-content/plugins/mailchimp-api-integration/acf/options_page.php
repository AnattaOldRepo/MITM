<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_mail-chimp-integration',
		'title' => 'Mail Chimp Integration',
		'fields' => array (
			array (
				'key' => 'field_53ecaddf852f9',
				'label' => 'Anattadesign Mailchimp Key',
				'name' => 'anattadesign_mailchimp_key',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53ecae02852fa',
				'label' => 'Anattadesign Mailchimp List',
				'name' => 'anattadesign_mailchimp_list',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-mail-chimp-integration',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
