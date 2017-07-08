<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statistics extends Model
{
    //
    protected $table = 'statistics';
    protected $fillable = ['player_id','match_id','points','assists','fouls','time','efficiency'];

    public function jqcalendar() {
        return $this->belongTo('App\jqcalendar','match_id','Id');
    }
}
