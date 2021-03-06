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
Route::get('home', 'HomeController@index');
Route::get('/', function(){return redirect('/home'); });

Route::get('testmenu', function () {
    return view('testmenu');
});


Route::auth();

Route::group(['middleware'=>'auth'],function(){
	Route::resource('usersmanage','usersController');
	Route::resource('usermenu', 'userMenuController');
	Route::resource('m_screen','MScreenController');
	Route::resource('screen','MScreenController@store');

	Route::resource('m_main_menu','MainMenuController');

	Route::get('screen_list','ScreensDatatableController@screenList');

});




