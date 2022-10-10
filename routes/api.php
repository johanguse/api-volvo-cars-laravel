<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarController;
use App\Http\Controllers\Api\CarBodyTypeController;
use App\Http\Controllers\Api\CarModelController;

Route::apiResource('cars', CarController::class);
Route::apiResource('bodies', CarBodyTypeController::class);
Route::apiResource('models', CarModelController::class);
