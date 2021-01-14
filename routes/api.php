<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Country\Country;

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


// Route::get('country',[CountryController::class,'country']);  
// Route::get('country/{id}',[CountryController::class,'countryByID']);  
// Route::post('country',[CountryController::class,'countrySave']);
// Route::put('country/{id}',[CountryController::class,'countryUpdate']);
// Route::delete('country/{id}',[CountryController::class,'countryDelete']);

Route::apiResource('country', Country::class);