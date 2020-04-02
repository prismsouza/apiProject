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
Route::apiResource('/units', 'UnitController');

Route::get('/people/cpf/{cpf}', 'PersonController@getPersonByCPF');
Route::get('/units/unit_name/{unit_name}', 'UnitController@getUnitByName');//->name('units/unit_name');
Route::get('/units/{unit_id}/people', 'PersonController@filter')->name('units/unit_id/people');
//Route::get('/units/{unit_name}/people', 'PersonController@filter')->name('units/unit_name/people');

