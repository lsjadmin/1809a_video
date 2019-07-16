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



Route::get('/v/video','Video\VideoController@video'); //视频展示

Route::get('/test/test','Video\VideoController@testa'); //测试播放器

Route::get('/v/oss1','Video\VideoController@oss1');


Route::get('/chat/chat','Chat\ChatController@upload');  //循环上传视频
Route::get('/chat/test','Video\VideoController@test');  //测试数据库

//阿里云 oss
Route::get('/notify.oss','Ali\AliControllerr@Oss');