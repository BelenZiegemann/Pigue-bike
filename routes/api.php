<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorredorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StayController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('corredores', CorredorController::class );
Route::apiResource('categories', CategoryController::class );
Route::apiResource('routes', RouteController::class );
Route::apiResource('stays', StayController::class );