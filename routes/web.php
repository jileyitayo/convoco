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

//Route::get('/', function () {
//    $this->middleware('auth');
//    return view('home');
//});

Route::get('/', 'HomeController@index');


//Route::get('/groups/{username}', 'GroupController@index');

Route::get('/index1', function() {
    return view('index1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{username?}', 'HomeController@show');
Route::get('/groups/', 'GroupController@index');
Route::post('/groups/', 'GroupController@store');
Route::put('/groups/{groupid?}', 'GroupController@update');
Route::get('/groups/{groupid?}', 'GroupController@show')->name('showGroup');
