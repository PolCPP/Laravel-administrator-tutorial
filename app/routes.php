<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

	Route::get('/', function()
	{
		// We need this we're using mass assignment to create the enemy/item.
		Eloquent::unguard();

		// Let's create an enemy
		$enemy = Enemy::firstOrCreate(array('name' => 'TestEnemy'));

		// And now a drop
		$item = Item::firstOrCreate(array('name' => 'TestDrop'));

		// Now let's add our item to the drop table
		$enemy->drops()->attach($item);

		// In case we want to add it with a specific drop rate.
		$enemy->drops()->attach($item, array('drop_rate' => 50.23));

		// Now imagine we want to see all our drops and their drop rate. 
		foreach ($enemy->drops as $drop)
		{
			echo $drop->name . ": drop rate is: " . $drop->pivot->drop_rate . "<br/>";
		}


		foreach ($item->enemy as $c_enemy)
		{
			echo $c_enemy->name . ": drop rate is: " . $drop->pivot->drop_rate . "<br/>";
		}


		// Now let's get rid of all the drops. 
		// This does not delete anything from the item table
		// only gets rid of the relation.
		$enemy->drops()->detach(); 
	});


Route::controller('/login', 'LoginController');
