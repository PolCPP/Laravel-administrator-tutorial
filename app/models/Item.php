<?php

class Item extends \Eloquent {
	protected $fillable = [];

	public function droppedBy()
	{
		return $this->belongsToMany('Enemy')->withPivot('drop_rate');
	}

}