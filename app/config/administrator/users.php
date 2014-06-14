  <?php

	/**
	 * Users model config
	 */

	return array(

		'title' => 'Users',
		'single' => 'user',
		'model' => 'User',

		'columns' => array(
			'email' => array(
				'title' => 'Email',
			),
			'username' => array(
				'title' => 'First Name',
			),
		),

		'edit_fields' => array(
			'email' => array(
				'title' => 'Email',
				'type' => 'text',
			),
			'username' => array(
				'title' => 'Username',
				'type' => 'text',
			),
			'password' => array(
				'title' => 'Password',
				'type' => 'password',
			),
		),
	);