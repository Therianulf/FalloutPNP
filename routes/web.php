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
})->middleware('guest');

Route::get('/home',"Game@game");
Route::get('/new_char_name',"character_creator@new_character")->middleware('web','auth');
Route::post('/attributes_handler',"character_creator@attributes_handler")->middleware('web','auth');
Route::get('/new_char_skills',"character_creator@character_skills")->middleware('web','auth');
Route::post('/skills_handler',"character_creator@character_skills_handler")->middleware('web','auth');
Route::post('/selected_character','Game@character')->middleware('web','auth');
Route::get('/test1',"test@test1")->middleware('auth','is_admin');
Route::get('/gm_screen','game_master@game_master_screen')->middleware('auth','is_admin');
Route::get('/gm_monsters','game_master@game_master_monsters')->middleware('auth','is_admin');
Route::post('/testRequest','testRequest@landing')->middleware('auth','is_admin');

Route::get('/admin','admin@admin')->middleware('auth','is_admin');
Route::post('/to_hit','admin@to_hit')->middleware('auth','is_admin');
Route::post('/remove_ammo','admin@remove_ammo')->middleware('auth','is_admin');
Route::post('/reload_ammo','admin@reload_ammo')->middleware('auth','is_admin');
Route::post('/calculate_damage','admin@calculate_damage')->middleware('auth','is_admin');
Route::post('/damage_character','admin@damage_character')->middleware('auth','is_admin');
Auth::routes();

