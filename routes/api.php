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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[\App\Http\Controllers\loginController::class, 'authenticate']);
Route::post('register' ,[\App\Http\Controllers\registerController::class, 'register']);
Route::get('datos',[\App\Http\Controllers\loginController::class, 'datos'])->middleware('auth:api');
Route::post('delete',[\App\Http\Controllers\deleteController::class, 'delete'])->middleware('auth:api');
