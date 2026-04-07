<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/customers/testStore', [CustomerController::class, 'create']);
Route::post('/customers', [CustomerController::class, 'store']);

Route::get('/', function () {
    return view('customers.testStore');
});

