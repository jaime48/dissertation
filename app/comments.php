<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    //
    public function users() {
        return $this->belongsTo('App\users','user_id','id');
    }
}
