<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
	protected $fillable = array(
			'name'
		);
    
	public function exercises()
	{
		return $this->hasMany('App\Exercise');
	}

}
