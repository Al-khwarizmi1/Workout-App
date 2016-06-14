<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    public function routine()
    {
    	return $this->belongsTo('App\Routine');
    }
}
