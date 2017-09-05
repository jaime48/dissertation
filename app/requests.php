<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requests extends Model
{
    //
    public function users() {
        return $this->belongsTo('\App\users','from_id','id');
    }
}
