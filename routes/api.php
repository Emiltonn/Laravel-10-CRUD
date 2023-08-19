<?php

use App\Http\Controllers\Api\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'Success' => true
    ]);
});


Route::delete('/customers/{id}', [CustomerController::class, 'destroy']);
Route::patch('/customers/{id}', [CustomerController::class, 'update']);
Route::get('/customers/{id}', [CustomerController::class, 'show']);
Route::get('/customers', [CustomerController::class, 'index']);
Route::post('/customers', [CustomerController::class, 'store']);
