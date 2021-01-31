<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('user/login', 'App\Http\Controllers\api\AuthController@login');
Route::post('user/create', 'App\Http\Controllers\api\AuthController@store');

Route::group(['prefix' => 'products', 'middleware' => ['apiJwt']], function () {

    Route::get('/', 'App\Http\Controllers\api\ProductController@index');
    Route::get('/{id}', 'App\Http\Controllers\api\ProductController@show');
    Route::post('/create', 'App\Http\Controllers\api\ProductController@store');
    Route::put('/update/{id}', 'App\Http\Controllers\api\ProductController@update');
    Route::delete('/destroy/{id}', 'App\Http\Controllers\api\ProductController@destroy');

});

Route::group(['prefix' => 'auth', 'middleware' => ['apiJwt']], function () {

    Route::post('logout', 'App\Http\Controllers\api\AuthController@logout');

});
