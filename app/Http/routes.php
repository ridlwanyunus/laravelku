<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('master');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/create', function () {
    return view('create');
});
Route::get('/create', 'AppController@insertData');
Route::get('/read', 'AppController@index');

Route::get('/update', function () {
    return view('update');
});
//Route::get('/delete', 'AppController@delete');
Route::get('/delete/{id}', 'AppController@delete');
Route::post('/create', 'AppController@insertData');
Route::get('/test', function () {
    return view('test');
});
Route::post('/received', function () {
    return view('received');
});