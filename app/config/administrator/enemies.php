  <?php

	/**
	 * Enemy model config
	 */

	return array(

		'title' => 'Enemies',
		'single' => 'enemy',
		'model' => 'Enemy',

		'columns' => array(
			'name' => array(
				'title' => 'name' 
			),
			'name_jp' => array(
				'title' => 'name_jp' 
			),
			'is_rare' => array(
				'title' => 'is_rare' 
			),
			'image' => array(
				'title' => 'image',
				'output' => '<img src="/uploads/items/(:value)" height="100" />',
			),
			'drops' => array(
				'title' => 'enemy drops',
				'relationship' => 'drops',
				'select' => 'COUNT((:table).name)'
			)
		),

		'edit_fields' => array(
			'name' => array(
				'title' => 'Name', 
				'type' => 'text' 
			),
			'name_jp' => array(
				'title' => 'JP Name', 
				'type' => 'text' 
			),
			'is_rare' => array(
				'title' => 'Is rare?', 
				'type' => 'bool' 
			),
			'image' => array(
				'title' => 'Image', 
				'type' => 'image',
				'location' => public_path() . '/uploads/items/'
			 ),
			'drops' => array(
				'type' => 'relationship',
				'title' => 'Drops',
				'name_field' => 'name',
			)
		),


		'filters' => array(
			'name' => array(
				'title' => 'Name', 
				'type' => 'text' 
			),
			'is_rare' => array(
				'title' => 'Is rare?', 
				'type' => 'bool' 
			),
			'drops' => array(
				'type' => 'relationship',
				'title' => 'Drops',
				'name_field' => 'name',
			)			
		),

	);