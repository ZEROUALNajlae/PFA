<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    protected $table = 'videos';
    
    public $timestamps = false;


    public function courses()
	{
		return $this->belongsTo('App\Courses');
	} 
}
