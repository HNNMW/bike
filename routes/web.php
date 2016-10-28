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
        Route::get('/updateSort', 'BikeController@updateSort');
        Route::get('/{id}/edit', 'BikeController@edit');
        Route::post('/{id}/update', 'BikeController@update');
        Route::get('/{id}/destroy', 'BikeController@destroy');
        Route::get('/create', 'BikeController@create');
        Route::post('/store', 'BikeController@store');
    });
    Route::group(['prefix' => 'sliders'], function () {
        Route::get('/', 'SliderController@index');
        Route::get('/updateSort', 'SliderController@updateSort');
        Route::post('/{id}/update', 'SliderController@update');
        Route::get('/{id}/destroy', 'SliderController@destroy');
        Route::post('/store', 'SliderController@store');
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
