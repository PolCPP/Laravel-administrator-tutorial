<?php

class Enemy extends \Eloquent {
	protected $fillable = [];
	
	public function drops()
	{
		return $this->belongsToMany('Item')->withPivot('drop_rate');
	}
}