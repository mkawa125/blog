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


Route::get('/', 'HomeController@index');
Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin' , 'UserController@dashboard');
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');

    /** Test broadcasting event */
    Route::get('/test-fire-event', 'HomeController@testBroadcast')->name('test-fire-event');
});
