<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teamMembers extends Model
{
    //
    protected $table = 'team_members';

    public function team(){
        return $this->belongsTo('App\teams','team_id','id');
    }

    public function user(){
        return $this->hasOne('App\users','id','user_id');
    }
}
