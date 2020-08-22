<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable=[
    'name','photo','subject_id','level_id','user_id',
    ];
      public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
    public function level()
    {
        return $this->belongsTo('App\Level');
    }
     public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
