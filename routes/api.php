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
Route::apiResource("/school", \App\Http\Controllers\SchoolController::class);
Route::apiResource("/location", \App\Http\Controllers\LocationController::class);
Route::apiResource("/measurement", \App\Http\Controllers\MeasurementsController::class);
Route::apiResource("/threshold", \App\Http\Controllers\ThresholdsController::class);

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
