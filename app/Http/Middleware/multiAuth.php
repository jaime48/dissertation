<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class multiAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check()){
           return redirect()->route('error',array('error' => 'please log in'));
        }
        if($request->route()->getName() == 'league' && $request->user()->user_type != 4){
            return redirect()->route('error',array('error' => 'You don\'t have authority to access this section, only League Manager can'));
        }
        if($request->route()->getName() == 'team.team' && $request->user()->user_type != 3){
            return redirect()->route('error',array('error' => 'You don\'t have authority to access this section, only Team Manager can'));
        }

        return $next($request);
    }
}
