<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Use App\User;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', 'ApiUserController@getAllUsers');

Route::get('users/{id}', 'ApiUserController@getUser');

Route::post('users', 'ApiUserController@createUser');

Route::put('users/{id}', 'ApiUserController@updateUser');

Route::delete('users/{id}', 'ApiUserController@deleteUser');
