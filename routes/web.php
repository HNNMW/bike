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
        Route::post('/updateSort', 'BikeController@updateSort');
        Route::get('/{id}/edit', 'BikeController@edit');
        Route::post('/{id}/update', 'BikeController@update');
        Route::get('/{id}/destroy', 'BikeController@destroy');
        Route::get('/create', 'BikeController@create');
        Route::post('/store', 'BikeController@store');
    });
    Route::group(['prefix' => 'sliders'], function () {
        Route::get('/', 'SliderController@index');
        Route::post('/updateSort', 'SliderController@updateSort');
        Route::post('/{id}/update', 'SliderController@update');
        Route::get('/{id}/destroy', 'SliderController@destroy');
        Route::post('/store', 'SliderController@store');
    });
    Route::group(['prefix' => 'galleries'], function () {
        Route::get('/', 'GalleryController@index');
        Route::post('/updateSort', 'GalleryController@updateSort');
        Route::post('/{id}/update', 'GalleryController@update');
        Route::get('/{id}/destroy', 'GalleryController@destroy');
        Route::get('/create', 'GalleryController@create');
        Route::post('/store', 'GalleryController@store');
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
