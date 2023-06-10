<?php

use App\Mahasiswa;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//API Tampil Data
Route::get('/mahasiswa/read','MhsAPIController@read');
//API Create Data
Route::POST('/mahasiswa/create','MhsAPIController@create');
//API delete Data
Route::delete('/mahasiswa/delete/{id}','MhsAPIController@delete');
//API Update Data
Route::POST('/mahasiswa/update/{id}','MhsAPIController@update');
