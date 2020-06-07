<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'courses';
    
    public $timestamps = false;


    public function students()
	{
		return $this->belongsToMany('App\Student');
    } 
    
    public function files()
	{
		return $this->hasMany('App\Files');
    } 
    
    public function videos()
	{
		return $this->hasMany('App\Videos');
    } 
    

    public function professor()
	{
		return $this->belongsTo('App\Professor');
    } 

    public function type()
	{
		return $this->belongsTo('App\Course_type');
	} 
}
