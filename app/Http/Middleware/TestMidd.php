<?php

namespace App\Http\Middleware;

use App\Log;
use App\Tesst;
use App\Test1;
use App\User;
use Closure;
use hisorange\BrowserDetect\Stages\BrowserDetect;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Unicodeveloper\Identify\Identify;
Use Exception;

class TestMidd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public $message;
    public function exeption($e)
    {
//        dd($e);
//        $this->message=$e->GetMessage();
//        dd($this->message);
    }
    public function handle($request, Closure $next)
    {
//        dd('we');

//        return User::create([
//            'name'=>'milad',
//            'email'=>'milad@yahoo.com',
//            'password'=>bcrypt('123456'),
//        ]);
        auth()->LoginUsingId(3);
//        dd(auth()->user()->id);
        //        $log=Log::get()->last();
        $log=new Log();
        $Identify=new Identify();
        $os=Str::finish( $Identify->os()->getName(),' ');
        $os=Str::finish($os, $Identify->os()->getVersion());
        $log->ip=$request->ip();
        $log->method=$request->method();
        $log->url=$request->url();
        $log->user_id=auth()->user()->id;
        $log->request=$request->input();
        $log->browser=$Identify->browser()->getName();
        $log->os=$os;
        $log->error_code=200;
        $log->save();
//        dd(1);
        dd($log->request);


        return $next($request);
    }


}

