<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

// Route to get all properties
Route::get('properties', [PropertyController::class, 'index']);

// Route to create a new property
Route::post('properties', [PropertyController::class, 'store']);

// Route to update a property
Route::put('properties/{id}', [PropertyController::class, 'update']);

// Route to delete a property
Route::delete('properties/{id}', [PropertyController::class, 'destroy']);

Route::apiResource('properties', PropertyController::class);