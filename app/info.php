<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class info extends Model
{
    //
    protected $table ='info';
    protected $fillable = ['user_id','bio','phone','address','email','avatar'];
}
