<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',"Game@game");
Route::get('/new_char_name',"Game@new_character");
Route::get('/test1',"test@test1");
Route::get('/gm_screen','game_master@game_master_screen');
Route::get('/gm_monsters','game_master@game_master_monsters');
Route::post('/testRequest','testRequest@landing');

Auth::routes();

