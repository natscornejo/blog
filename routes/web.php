<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('index');
});*/


//Route::get('name', '\App\Http\Controllers\HomeController@name');

Route::get('/', 'HomeController@index')->name('index');
Route::get('team', 'HomeController@team')->name('team');
//Route::get('nombre que aparece en la web', 'HomeController@nombre de tu funcion')->name('team');

/*CREATE
Route::post*/

/*READ
Route::get*/

/*UPDATE
Route::put*/

/*DELETE
Route::delete*/

/*Combina todo lo anterior aqui en Laravel
Route::resouce();
*/

Route::resource('/blog', 'PostController');