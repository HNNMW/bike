<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'Api'], function () {

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UserController@index');
    });

    Route::group(['prefix' => 'bikes'], function () {
        Route::get('/', 'BikeController@index');
    });

    Route::group(['prefix' => 'images'], function () {
        Route::get('/', 'GalleryController@index');
    });

});

