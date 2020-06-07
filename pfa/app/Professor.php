<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professor';
    
    public $timestamps = false;

    public function courses()
	{
		return $this->hasMany('App\Courses');
	} 
}
