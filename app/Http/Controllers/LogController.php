<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Exports\LogsExport;
use App\Log;
use App\Permission;
use App\Role;
use App\time;
use App\User;
use App\View;
use Carbon\Carbon;
use http\Message;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */

    public function acl()
    {
        return Admin::create([
           'name'=>'mohammad',
           'email'=>'mo@yahoo.com',
           'status'=>'a',
           'password'=>bcrypt('123456'),
        ]);

        dd(1);
        return (auth()->user());

//       return Permission::create([
//           'name'=>'edit-post',
//           'label'=>'ویرایش پست'
//        ]);

//        return auth()->loginUsingId(3);
//        return Role::whereName('manager')->first()->permissions()->get();
//        return auth()->user()->roles()->get();

//        dd('3');
//        dd(auth()->user()->hasRole('manager'));

    }

    public function time()
    {


        $time_alls=Time::all();
//        dd($time_all);

        foreach ($time_alls as $time_all)
        {


            $duration=$time_all->duration;

            $time=$time_all->time;

            $time_new=Carbon::create($time_all->time);
            $time_new=$time_new->addMinutes($duration);
            $time_new=$time_new->format('H:i:s');

            $current_time= new \DateTime();
            $current_time=$current_time->format('H:i:s');


            if($time <= $current_time and $time_new >= $current_time)
            {
                echo ($time_all);
                echo (' ');
            }
            else
                echo ('no ');
        }
    }

    public function fake()
    {
        $view=View::whereId('1')->first();
        $time=new \DateTime();
        $time=$time->format('H:i:s');

        if($time >= '08:00:00' and $time <= '12:00:00')
        {
            $rnd=rand(1,10);
        }elseif($time >= '12:00:00' and $time <= '15:00:00')
        {
            $rnd=rand(1,5);
        }elseif ($time >= '15:00:00' and $time <= '17:00:00')
        {
            $rnd=rand(1,8);
        }elseif ($time >= '17:00:00' and $time <= '22:00:00')
        {
            $rnd=rand(1,12);
        }elseif ($time >= '22:00:00' and $time <= '23:59:00')
        {
            $rnd=rand(1,5);
        }

        if($view->count_fake == 0)
        {
            $view->count_fake=$view->count+$rnd;
            $view->save();
            dd($view->count_fake,'yes',$rnd);
        }
        else
        {
            $view->count_fake=$view->count_fake+$rnd;
            $view->save();
            dd($view->count_fake,'no',$rnd);
        }
    }


    public function index()
    {



        return Excel::download(new LogsExport(), 'log.xlsx');

        //        return LogsExport::all();
//        dd($excel);


//        dd($excel);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function show(Log $log)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function edit(Log $log)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Log $log)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function destroy(Log $log)
    {
        //
    }
}
