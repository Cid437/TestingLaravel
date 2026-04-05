<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::apiResource('customers', CustomerController::class);
Route::get('/test', function () {
    return response()->json(['message' => 'API working']);
});