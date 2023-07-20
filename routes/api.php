<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('list', [EventController::class, 'index']);
    Route::get('{id}', [EventController::class, 'show']);
    Route::put('{id}', [EventController::class, 'update']);
    Route::patch('{id}', [EventController::class, 'update']);
    Route::delete('{id}', [EventController::class, 'destroy']);
});
