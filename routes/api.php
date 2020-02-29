<?php

declare(strict_types=1);

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

Route::group(['middleware' => 'guest:api'], function () {
    Route::post('/login', 'Api\AuthController@login');
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/me', 'Api\AuthController@me');
});

Route::get('/hc', function () {
    return response()->json(['msg' => 'ok']);
});
