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

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('home');
});*/
/*
Route::get('/user', function(){
    return view('user',['user'=> 'Laity']);
});*/

Route::get('/user/{id?}', function($id = 'No data is passed'){
    return view('user',['user'=> $id]);
});

Route::get('/','UserController@index');
Route::get('/profil','UserController@profil');
Route::get('/contact','UserController@join');
Route::get('/login','UserController@login');
Route::get('/services','UserController@services');
Route::get('/db','adminController@checkDB');


Route::redirect('/here','/');

/*
Route::get('salut/{name}', function($name){
    return "Salut $name";
});*/

/*Route::get('salut/{name}-{id}', function ($name, $id) {
    return "Salut Monsieur/Madame: $name - ID : $id";
})->where('name', '[a-z0-9\-]+')
    ->where('id', '[0-9]+');*/


Route::get('salut/{slug}-{id}', ['as'=>'salut',function ($slug, $id) {
    return "Link : " .route('salut',['slug'=>$slug, 'id'=>$id]);
}]);


/*Route::group(['prefix'=> 'admin', 'middleware'=> 'ip'], function(){

    Route::get('salut/{name}', function($name){
        return "Salut $name";
    });

});*/