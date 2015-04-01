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

Route::get('/', 'WelcomeController@index');
/*
Route::get('/', 'SharesListController@networth');*/

Route::get('calendar', 'MeetingController@index');
Route::get('calendar/add', 'MeetingController@add');
Route::get('calendar/edit', 'MeetingController@edit');
Route::get('calendar/delete', 'MeetingController@delete');

Route::get('client', 'ClientController@index');
Route::get('client/add', 'ClientController@add');
Route::get('client/edit', 'ClientController@edit');
Route::post('client/delete/{id}', array('as'=>'client/delete', 'uses'=>'ClientController@delete'));

Route::get('fa', 'FaController@index');
Route::get('fa/add', 'FaController@add');
Route::get('fa/edit', 'FaController@edit');
Route::post('fa/delete/{id}', array('as'=>'fa/delete', 'uses'=>'FaController@delete'));

Route::get('faclient/{id}', array('as'=>'faclient', 'uses'=>'ClientListController@index'));

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
