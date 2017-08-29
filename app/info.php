<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{

    protected $table = 'info';

    protected $fillable = ['user_id','bio','phone','address','email','avatar','hobby'];

    public function user() {
        return $this->belongsTo('\App\users','user_id','id');
    }

    public function connections() {
        return $this->hasMany('App\connections','user_id','user_id');
    }

}
