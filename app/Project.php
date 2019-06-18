<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function projectschadulings(){
    	   return $this->hasMany('App\Projschaduling');

    }
    public function user(){
    	   return $this->belongsTo('App\User');

    }
}
