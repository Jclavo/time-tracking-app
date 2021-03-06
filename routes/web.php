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

Auth::routes();

Route::get('users', 'UserController@index')->name('users.index');
Route::get('projects', 'ProjectController@index')->name('projects.index');

Route::match(array('GET','POST'),'tasks/tracking', 'TaskController@tracking')->name('tasks.tracking')->middleware('auth','admin');

Route::get('tasks', 'TaskController@index')->name('tasks.index');
Route::get('tasks/create', 'TaskController@create')->name('tasks.create');
Route::post('tasks/store', 'TaskController@store')->name('tasks.store');
//Route::get('/home', 'HomeController@index')->name('home');

//GROUPS
Route::group(['middleware' => 'admin'], function() {
    
    
    Route::resource('users', 'UserController', ['except' => 'index']);
    //Route::resource('users', 'UserController');
    Route::resource('projects', 'ProjectController', ['except' => 'index']);
    Route::resource('tasks', 'TaskController', ['except' => ['index','create','store']]);
    
});









