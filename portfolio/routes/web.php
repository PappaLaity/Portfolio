<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// Home Page
Route::get('/', 'PageController@home');
// Resume Page Skills,...
Route::get('resume', 'PageController@resume');
// Join me form 
Route::get('contact', 'PageController@contact');
// Send une notification  et Retour par mail
Route::post('contact', 'PageController@contact');
// Service Page ... All Project Tuto done by me
Route::get('service', 'PageController@service');
// Login Page ... not in homepage 
//Route::get('login', 'PageController@login');
//Formulaire de connexion en tant que Admin
//Route::post('admin', 'PageController@contact');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('welcome', function () {
    return view('welcome');
});
