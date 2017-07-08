<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jqcalendar extends Model
{
    //
    protected $table = 'jqcalendar';

    public static function dataRefine($data){
        $team1Name = \App\teams::find($data->team1)->name;
        $team2Name = \App\teams::find($data->team2)->name;
        $refinedData = [
            'user_id' =>$data
        ];
        return 1;
    }

    public function statistics (){
        return $this->hasMany('App\statistics','match_id','Id');
    }
}
