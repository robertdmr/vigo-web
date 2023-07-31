<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VehicleController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/drivers', [DriverController::class, 'store']);
Route::post('/upload-foto',[ImageController::class, 'uploadFoto']);
Route::post('/driver-vehicle',[VehicleController::class, 'store']);

Route::post('/control',[DriverController::class, 'control']);
