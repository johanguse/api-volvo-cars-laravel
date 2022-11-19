<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarController;
use App\Http\Controllers\Api\CarBodyTypeController;
use App\Http\Controllers\Api\CarModelController;

Route::get('/cars', [CarController::class, 'index']);
Route::get('cars/random', [CarController::class, 'random']);
//Route::apiResource('cars', CarController::class);

Route::get('bodies', [CarBodyTypeController::class, 'index']);
//Route::apiResource('bodies', CarBodyTypeController::class);
Route::get('models', [CarModelController::class, 'index']);
//Route::apiResource('models', CarModelController::class);
