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

/*Accueil*/
Route::get('/', 'MainController@accueil');

/*Accès aux différentes pages de vidéos*/
Route::get('/fortnite', 'MainController@videoPrinter');
Route::get('/apex', 'MainController@videoPrinter');
Route::get('/overwatch', 'MainController@videoPrinter');
Route::get('/valorant', 'MainController@videoPrinter');

/*Accès aux != fonctionnalités du compte*/
Route::get('/param', 'AccountController@param')->middleware('checkAuth');

Route::get('/addvideo', 'AccountController@addVideo')->middleware('checkAuth');
Route::post('/postVideo', 'AccountController@store')->middleware('checkAuth');

Route::get('/myvideo', 'AccountController@myVideo')->middleware('checkAuth');
Route::get('/deleteVideo', 'AccountController@delete')->middleware('checkAuth');

/*Auth*/
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
