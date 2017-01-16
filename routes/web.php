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


    Route::get('/', 'PagesController@home');


    Route::get('/about', 'PagesController@about');


    Route::get('/impressum', 'PagesController@impressum');

    Route::get('/test', 'PagesController@test');
    Route::get('/test2', 'PagesController@test2');

    Route::get('/menu', 'PagesController@menu');

    Route::get('/contacts', 'PagesController@contacts');


    Route::get('/ish', function () {
    return response('Hello World', 200)
        ->header('Content-Type', 'text/plain');

});




Auth::routes();

Route::get('/home', 'HomeController@index');
