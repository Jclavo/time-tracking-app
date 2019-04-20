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

Route::resource('users', 'UserController');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('projects', 'ProjectController');

//Route::get('tasks/trackingAll', 'TaskController@trackingAll')->name('tasks.trackingAll');
//Route::get('tasks/tracking', 'TaskController@tracking')->name('tasks.tracking');
Route::match(array('GET','POST'),'tasks/tracking', 'TaskController@tracking')->name('tasks.tracking');


Route::resource('tasks', 'TaskController');


