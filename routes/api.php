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


Route::post('login','Auth\LoginController@apiLogin');

// Route::
Route::middleware('auth:api')->group(function(){
    Route::get('actors','ActorController@getActors');
    Route::post('actor/store','ActorController@apiStore');

    Route::get('titles','VideoController@getTitles');
    Route::get('links','VideoController@getLinks');
});