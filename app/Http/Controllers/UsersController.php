<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Illuminate\Support\Facades\Mail;
use App\Mail\ChangePassword;
use App\generateRandomPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * registration for new users
     */
    public function register(Request $request){
        //todo: re-validating inputs with laravel validator.
        $users = new users();
        $users -> first_name = $request['first_name'];
        $users -> last_name  = $request['last_name'];
        $users -> user_type  = $request['user_type'];
        $users -> phone      = $request['phone'];
        $users -> address    = $request['address'];
        $users -> city       = $request['city'];
        $users -> zip        = $request['zip'];
        $users -> comment    = $request['comment'];
        $users -> email      = $request['email'];
        $users -> password   = bcrypt($request['password']);

        $users->save();
        \App\notifications::addNotification($users->id,'registration','You have successfully registered');
        return view('registersuccess');
    }

    /**
     * @param Request $request
     * @return int
     * verify duplicated email address
     */
    public function verifyEmail(Request $request){
       
        $users = new users();
        if($users::where('email','=',$request->email)->first()){
            return 1;
        }
        return 0;
    }

    /**
     * @param Request $request
     * @return int
     * verify login information
     */
    public function login(Request $request){
        $request->rememberMe=="true" ? $remember = true : $remember = false;
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],$remember)){
          return 1;
        }
        return 0;
    }

    /**
     * @param Request $request
     * clear login info
     */
    public function clearSessionCookie(Request $request){
        Auth::logout();

    }

    /**
     * @param Request $request
     * @return mixed
     * get user's login info
     */
    public function getSession(Request $request){
        if($request->user()){
            return $request->user()->first_name;
        }
       return null;
    }



    /**
     * @param Request $request
     * @return int
     * generate verification code
     */
    public function sendVerificationCode(Request $request){
            $generatePassword =  new generateRandomPassword();
            $password = $generatePassword->generate();
            Mail::to($request->email)->send(new ChangePassword($password));

            return $password;
    }

    /**
     * @param Request $request
     * @return mixed
     * verify current password
     */
    public function checkPassword(Request $request){
        $user = $request->user();
        if(Hash::check($request->password,$user->password)){
            return 1;
        }
        return 0;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * change password
     */
    public function changePassword(Request $request){
        $users = new users();
        $users::where('email','=',$request->email)->update(['password'=>bcrypt($request->password)]);
        return view('changepasswordsuccess');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * get user's info and edit user's info
     */
    public function getSettings(Request $request){
        $user = $request->user();

        $users = new users();
        $data = $users->verifyColumn($request);
        if($data){
            $users->where('email','=',$user->email)->update($data);
        }
        $info = $users::where('email','=',$user->email)->first()->toArray();
        return view('settings',$info);
    }

    public function test(Request $request){
        print_r($request->user()->email);
    }



}
