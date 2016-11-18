<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('interface',"Interfacecontroller@index");
Route::get('brief',"Interfacecontroller@brief");
Route::get('information',"Interfacecontroller@information");
Route::get('information',"Interfacecontroller@information");
Route::get('delay_add',"Interfacecontroller@delay");
Route::get('green_add',"Interfacecontroller@green");
Route::get('user_add',"Interfacecontroller@user");
Route::get('dorm_add',"Interfacecontroller@dorm");
Route::get('arrive_add',"Interfacecontroller@arrive");
Route::get('reportCard_add',"Interfacecontroller@reportCard");
Route::any('commonquestion_add',"Interfacecontroller@commonquestion");
Route::any('tiwen_add',"Interfacecontroller@tiwen");
Route::any('myanswer_add',"Interfacecontroller@myanswer");
Route::get('select',"Interfacecontroller@select");


Route::get('login',"Logincontroller@index");
Route::get('index',"Indexcontroller@index");
Route::get('self-report',"Indexcontroller@self");
Route::get('green',"Indexcontroller@green");
Route::get('arrive',"Indexcontroller@arrive");
Route::get('delay',"Indexcontroller@delay");
Route::get('must-know',"Indexcontroller@must");
Route::get('notice',"Indexcontroller@notice");
Route::get('data',"Indexcontroller@data");
Route::get('ask',"Indexcontroller@ask");
Route::get('entrance',"Indexcontroller@entrance");
Route::get('user-center',"Indexcontroller@user");
Route::get('route',"Indexcontroller@route");
Route::get('user-info',"Indexcontroller@user_info");
Route::get('changepsw',"Indexcontroller@changepsw");
Route::get('dorm-book',"Indexcontroller@dorm");
Route::get('reportCard',"Indexcontroller@reportCard");
Route::get('commonquestion',"Indexcontroller@commonquestion");
Route::get('answer',"Indexcontroller@answer");
Route::get('myanswer',"Indexcontroller@myanswer");
Route::get('tiwen',"Indexcontroller@tiwen");
Route::post('file_add',"Indexcontroller@files");
Route::get('noticeDetail',"Indexcontroller@noticeDetail");
Route::get('uploaDate',"Indexcontroller@uploaDate");