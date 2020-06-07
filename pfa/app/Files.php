<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $table = 'files';
    
    public $timestamps = false;

    public function professor()
	{
		return $this->belongsTo('App\Professor');
    } 

    public function courses()
	{
		return $this->belongsTo('App\Courses');
	} 
}
