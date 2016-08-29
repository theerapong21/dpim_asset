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
    return view('welcome');
});
Route::get('servererror', function () {
    return view('errors.503');
});
Route::get('testmenu', function () {
    return view('testmenu');
});

Route::get('apptest', function () {
    return view('layouts.app');
});

Route::resource('usersmanage','usersController');
Route::resource('usermenu', 'userMenuController');

Route::auth();

Route::get('/home', 'HomeController@index');

