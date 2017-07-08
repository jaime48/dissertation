<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teams extends Model
{
    //
    protected $table = 'teams';

    public function league(){
        return $this->belongsTo('App\league');
    }
    public function members(){
        return $this->hasMany('App\teamMembers','id','team_id');
    }

}
