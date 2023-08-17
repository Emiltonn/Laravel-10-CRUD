<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'Success' => true
    ]);
});

Route::get('/customers', [CustomerController::class, 'index']);
