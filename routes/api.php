<?php
use App\Http\Controllers\Api\CarController;
use Illuminate\Support\Facades\Route;

Route::apiResource('cars', CarController::class);
