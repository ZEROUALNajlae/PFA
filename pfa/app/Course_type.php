<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_type extends Model
{
    protected $table = 'course_type';
    
    public $timestamps = false;

    public function courses()
	{
		return $this->hasMany('App\Courses');
	} 
}
