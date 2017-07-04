<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
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

Route::post('/user/signup','UserController@signUp')->name('user.register') ;
Route::get('/users','UserController@getUsers')->name('user.fetchAll');
Route::post('/user/signin','UserController@signIn')->name('user.login') ;
//::middlewar1e('auth.jwt')