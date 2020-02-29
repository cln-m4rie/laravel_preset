<?php

declare(strict_types=1);

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

Route::group(['middleware' => 'guest:api'], function (): void {
    Route::post('/login', 'Api\AuthController@login')->name('api.login');
});

Route::group(['middleware' => 'auth:api'], function (): void {
    Route::get('/me', 'Api\AuthController@me');
});

Route::get('/hc', function () {
    return response()->json(['msg' => 'ok']);
});
