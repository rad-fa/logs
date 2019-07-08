<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Config;

//use Illuminate\Support\Facades\Config;

class CheckAccess
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
        auth()->loginUsingId(1);
//        dd(User::whereId(1)->first()->status[1]);
//        dd( auth()->user()->status['roles']);
//        dd(\config('CheckStatus.roles.0'));
        if(auth()->user()->status['roles']==\config('CheckStatus.roles.0'))
            return $next($request);
        else
            return redirect('/');

    }
}
