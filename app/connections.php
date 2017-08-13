<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class connections extends Model
{
    //
    public function users() {
        return $this->belongsTo('App\users','connection_id','id');
    }
}
