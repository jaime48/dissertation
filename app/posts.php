<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    //
    public $fillable = ['url'];

    public function users() {
        return $this->belongsTo('App\users','user_id','id');
    }

    public function comments() {
        return $this->hasMany('App\comments','post_id','id');
    }
}
