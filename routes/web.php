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

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('top');
});

Route::get('/users/{id}', 'UserController@show');

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('me', 'UserController@edit');
    Route::post('timer/start', 'TimerController@start')->name('timer.start');
    Route::post('timer/{timer}/stop', 'TimerController@stop')->name('timer.stop');
});

Route::get('/users/1', function () {
    return view('users.show');
});

Route::get('/users/1', 'UserController@show');

Route::post('me', 'UserController@update')->middleware('auth')->name('users.update');
