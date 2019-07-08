<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//use Illuminate\Routing\Route;


use App\Exports\LogsExport;

use Maatwebsite\Excel\Facades\Excel;



Route::get('/', function () {
    return view('welcome',compact('file'));
});


//Route::get('/fake', function () {
//    $this->get('CommentLike/{id','LikeController@LikeComment');

//});



Route::get('/test', function () {
    return view('test');
});



Route::get('/excel', function () {
    return Excel::download(new LogsExport, 'Logs.xlsx');

});

Route::group(['namespace'=>'a'],function(){
//    $this->get('/acl','LogController@acl');
});

Route::get('/test/1','LogController@index')->middleware('test');
Route::get('/fake','LogController@fake');
Route::get('/time','LogController@time');
Route::get('/acl','LogController@acl');



Route::group(['prefix'=>'users'],function () {
    Route::get('/index','LogController@index');
    Route::get('/edit','LogController@index');
    Route::get('/create','LogController@index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');

