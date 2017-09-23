<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class connections extends Model
{
    //
    public function users() {
        return $this->belongsTo('App\users','connection_id','id');
    }

    public function info() {
        return $this->hasOne('\App\info','user_id','connection_id');
    }
}
