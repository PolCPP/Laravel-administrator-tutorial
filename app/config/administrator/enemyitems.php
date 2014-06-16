	  <?php

		/**
		 * EnemyItems model config
		 */

		return array(

			'title' => 'Drops',
			'single' => 'drop',
			'model' => 'EnemyItem',

			'columns' => array(
				'drop_rate' => array(
					'title' => 'Drop Rate',
				),
				
				'enemy' => array (
					'title' => 'Dropped by',
					'relationship' => 'Enemy',
					'select' => '(:table).name'
				),

				'item' => array (
					'title' => 'Item',
					'relationship' => 'Item',
					'select' => '(:table).name'
				)
			),

			'edit_fields' => array(
				'drop_rate' => array(
					'title' => 'Drop rate',
					'type' => 'number' 
				),
				
				'enemy' => array(
					'type' => 'relationship',
					'title' => 'Dropped by',
					'name_field' => 'name',
				),

				'item' => array(
					'type' => 'relationship',
					'title' => 'Drop',
					'name_field' => 'name',
				)
			),

			'filters' => array(
				'enemy' => array(
					'type' => 'relationship',
					'title' => 'Dropped by',
					'name_field' => 'name',
				),
				'item' => array(
					'type' => 'relationship',
					'title' => 'Drop',
					'name_field' => 'name',
				),
			),

		);