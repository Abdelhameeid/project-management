<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
     public function projschadulings(){
    	   return $this->belongsTo('App\Projschaduling');

    }
}
