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

Route::apiResource('list', 'App\Http\Controllers\DataListController');

Route::get('list', 'App\Http\Controllers\DataListController@index');
Route::get('list/{id}', 'App\Http\Controllers\DataListController@show');
Route::post('list', 'App\Http\Controllers\DataListController@create');
Route::put('list/{id}', 'App\Http\Controllers\DataListController@edit');
Route::delete('list/{id}','App\Http\Controllers\DataListController@destroy');