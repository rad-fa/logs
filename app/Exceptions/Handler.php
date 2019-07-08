<?php

namespace App\Exceptions;

use App\Http\Middleware\TestMidd;
use App\Log;
use Carbon\Carbon;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Http\Controllers\LogController;
use MongoDB\BSON\Timestamp;
use phpDocumentor\Reflection\Types\Null_;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);

    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        $responce= parent::render($request, $exception);
//        dd(1);
//        $log=Log::whereUser_id(auth()->user()->id)->get()->last();
////        dd($log);
//
//        if ($log->error_code==200 and $log->created_at == Carbon::now()->toDateTimeString() )
//        {
//            $log->error_code=$responce->status();
//            $log->save();
//        }
//        else
//        {
//            $log_ip=$log->ip;
//            $log_method=$log->method;
//            $log_url=$log->url;
//            $log_user_id=$log->user_id;
//            $log_request=$log->request;
//            $log_browser=$log->browser;
//            $log_os=$log->os;
//
//            $log=new log();
//            $log->ip=$log_ip;
//            $log->method=$log_method;
//            $log->url=$log_url;
//            $log->user_id=$log_user_id;
//            $log->request=$log_request;
//            $log->browser=$log_browser;
//            $log->os=$log_os;
//            $log->error_code=$responce->status();
//            $log->save();
//        }
        return $responce;
    }
}
