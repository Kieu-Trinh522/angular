<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('students')->group(function(){
    Route::get('/','StudentController@index');
    Route::post('/','StudentController@store');
    Route::put('/{id}','StudentController@update');
    Route::get('/{id}','StudentController@show');
    Route::delete('/{id}','StudentController@destroy');
});
