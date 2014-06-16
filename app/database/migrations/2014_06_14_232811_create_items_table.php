<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('name_jp');
			$table->text('desc');
			$table->text('desc_jp');
			$table->integer('rarity');
			$table->integer('max_stack_on_hand');
			$table->integer('max_stack_in_storage');
			$table->boolean('is_arks_cash');
			$table->boolean('is_tradable');
			$table->boolean('account_bound_on_equip');
			$table->boolean('is_account_bound');
			$table->boolean('can_be_dropped');
			$table->boolean('can_be_sold');
			$table->boolean('can_be_exchanged');
			$table->boolean('can_be_fed_to_mag');
			$table->integer('buy_price');
			$table->integer('sell_price');
			$table->text('notes');
			$table->string('image');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('items');
	}

}
