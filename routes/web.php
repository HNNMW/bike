<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', 'AdminController@dashboard');

    Route::group(['prefix' => 'bikes'], function () {
        Route::get('/', 'BikeController@index');
        Route::any('/updateSort', 'BikeController@updateSort');
        Route::any('/update', 'BikeController@update');
    });

    // Catch all other routes and show home -- Remove later
    Route::any('{path?}', function () {
        return view('home');
    });
});

Route::any('{path?}', function()
{
    return view('index');
})->where('path', '.+');
