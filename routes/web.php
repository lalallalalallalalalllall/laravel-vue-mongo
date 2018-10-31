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

Auth::routes(['verify' => true]);
// Route::get('/home', 'HomeController@index')->middleware('verified');
Route::get('/main', 'MainController@index')->middleware('verified')->name('main');
Route::get('/main/{any}', 'MainController@index')->where('any', '.*')->middleware('verified');
