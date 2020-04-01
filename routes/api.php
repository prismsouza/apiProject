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

Route::apiResource('/people', 'PersonController');
Route::apiResource('/unities', 'UnityController');

//Route::get('/unities/{unity_name}', 'UnityController@showByName')->name('unities/unity_name');
Route::get('/unities/{unity_id}/people', 'PersonController@filter')->name('unities/unity_id/people');
//Route::get('/unities/{unity_name}/people', 'PersonController@filter')->name('unities/unity_name/people');

