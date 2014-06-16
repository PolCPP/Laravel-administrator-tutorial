  <?php

	/**
	 * Item model config
	 */

	return array(

		'title' => 'Items',
		'single' => 'item',
		'model' => 'Item',

		'columns' => array(
			'name' => array(
				'title' => 'Name',
			),
			'name_jp' => array(
				'title' => 'JP Name',
			),			
			'rarity' => array (
				'title' => 'Rarity'
			),
			'image' => array (
				'title' => 'Image',
				'output' => '<img src="/uploads/items/(:value)" height="100" />',
			),
			'drops' => array (
				'title' => 'Dropped by',
				'relationship' => 'droppedBy',
				'select' => 'COUNT((:table).id)'
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
			'desc' => array(
				'title' => 'Description',
				'type' => 'markdown' 
			),
			'desc_jp' => array(
				'title' => 'JP Description',
				'type' => 'markdown' 
			),
			'rarity' => array(
				'title' => 'Rarity',
				'type' => 'number'
			),
			'max_stack_on_hand' => array(
				'title' => 'Max stack on hand',
				'type' => 'number'
			),
			'max_stack_in_storage' => array(
				'title' => 'Max stack on storage',
				'type' => 'number' 
			),
			'is_arks_cash' => array(
				'title' => 'Is an arks cash item',
				'type' => 'bool' 
			),
			'is_tradable' => array(
				'title' => 'Is tradable',
				'type' => 'bool' 
			),
			'account_bound_on_equip' => array(
				'title' => 'Bound on equip',
				'type' => 'bool' 
			),
			'is_account_bound' => array(
				'title' => 'Is account bound',
				'type' => 'bool' 
			),
			'can_be_dropped' => array(
				'title' => 'Can be dropped',
				'type' => 'bool' 
			),
			'can_be_sold' => array(
				'title' => 'Can be sold',
				'type' => 'bool' 
			),
			'can_be_exchanged' => array(
				'title' => 'Can be exchanged',
				'type' => 'bool' 
			),
			'can_be_fed_to_mag' => array(
				'title' => 'Can be fed to mag',
				'type' => 'bool' 
			),
			'buy_price' => array(
				'title' => 'Buy price',
				'type' => 'number' 
			),
			'sell_price' => array(
				'title' => 'Sell price',
				'type' => 'number' 
			),
			'notes' => array(
				'title' => 'Notes',
				'type' => 'markdown' 
			),
			'image' => array(
				'title' => 'Image',
				'type' => 'image',
				'location' => public_path() . '/uploads/items/',
			),
			'droppedBy' => array(
				'type' => 'relationship',
				'title' => 'Dropped by',
				'name_field' => 'name',
			)
		),

		'filters' => array(
			'name' => array(
				'title' => 'Name',
				'type' => 'text' 
			),
			'rarity' => array(
				'title' => 'Rarity',
				'type' => 'number'
			),
			'max_stack_on_hand' => array(
				'title' => 'Max stack on hand',
				'type' => 'number'
			),
			'max_stack_in_storage' => array(
				'title' => 'Max stack on storage',
				'type' => 'number' 
			),
			'is_arks_cash' => array(
				'title' => 'Is an arks cash item',
				'type' => 'bool' 
			),
			'is_tradable' => array(
				'title' => 'Is tradable',
				'type' => 'bool' 
			),
			'account_bound_on_equip' => array(
				'title' => 'Bound on equip',
				'type' => 'bool' 
			),
			'is_account_bound' => array(
				'title' => 'Is account bound',
				'type' => 'bool' 
			),
			'can_be_dropped' => array(
				'title' => 'Can be dropped',
				'type' => 'bool' 
			),
			'can_be_sold' => array(
				'title' => 'Can be sold',
				'type' => 'bool' 
			),
			'can_be_exchanged' => array(
				'title' => 'Can be exchanged',
				'type' => 'bool' 
			),
			'can_be_fed_to_mag' => array(
				'title' => 'Can be fed to mag',
				'type' => 'bool' 
			),
			'droppedBy' => array(
				'type' => 'relationship',
				'title' => 'Dropped by',
				'name_field' => 'name',
			)
		),
	);