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


Route::resource('skill', 'SkillController');
Route::resource('experience', 'ExperienceController');
Route::resource('formation', 'FormationController');
Route::resource('user', 'UserController');
