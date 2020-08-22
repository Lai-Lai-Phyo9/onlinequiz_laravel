<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	protected $fillable=[
    'name','photo',
    ];
     public function topics()
    {
        return $this->hasMany('App\Topic');
    }

}
