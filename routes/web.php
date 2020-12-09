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
    return view('auth.login');
});
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/postlgn', 'LoginController@loginPost');


Route::group(['middleware' => ['auth','status:admin']],function(){

Route::get('/home', 'Dashboard@home');
Route::post('/input', 'Dashboard@buat');
Route::get('/home', 'Dashboard@pagination');
Route::get('/home/{del}/delete', 'Dashboard@delete');
Route::post('/home/{id}/edit', 'Dashboard@update');
Route::get('/logout','LoginController@logout');

});
