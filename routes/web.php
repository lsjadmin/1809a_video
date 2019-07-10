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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/v/video','Video\VideoController@index');


Route::get('/v/oss1','Video\VideoController@oss1');


Route::get('/chat/chat','Chat\ChatController@upload');
Route::get('/chat/test','Video\VideoController@test');