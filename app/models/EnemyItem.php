<?php

class EnemyItem extends \Eloquent {
	protected $fillable = [];
    protected $table = 'enemy_item';

	public function Enemy()
	{
		return $this->belongsTo('Enemy');
	}

	public function Item()
	{
		return $this->belongsTo('Item');
	}

}