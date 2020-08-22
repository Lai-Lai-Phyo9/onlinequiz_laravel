<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortQuestion extends Model
{
    protected $fillable=[
    'name','photo',
    ];
     public function question()
    {
        return $this->belongsTo('App\Question');
    }
        public function users()
    {
    	return $this->belongsToMany('App\User')
    				->withPivot('answer')
    				->withTimestamps();
    }
}
