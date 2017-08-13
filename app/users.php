<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class users extends Model implements Authenticatable
{
    //
    use \Illuminate\Auth\Authenticatable;

    public function connections() {
        $this->hasMany('App\connections','user_id','id');
    }
    
    public function verifyColumn($request){
        $data=[];
        !empty($request->new_first_name) ? $data['first_name'] = $request->new_first_name:'';
        !empty($request->new_last_name) ? $data['last_name'] = $request->new_last_name:'';
        !empty($request->new_phone) ? $data['phone'] = $request->new_phone:'';
        !empty($request->new_address) ? $data['address'] = $request->new_address:'';
        !empty($request->new_city) ? $data['city'] = $request->new_city:'';
        !empty($request->new_zip) ? $data['zip'] = $request->new_zip:'';
        !empty($request->new_pass) ? $data['password'] = bcrypt($request->new_pass):'';
        return $data;
    }

}
