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

Route::get('/user/add','UserController@add');
Route::get('/test/redis','UserController@RedisTest');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//测试

Route::get('/prize','PrizeController@index');       //抽奖
Route::post('/prize','PrizeController@prizeDo');       //抽奖
