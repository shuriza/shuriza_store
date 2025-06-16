<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MidtransController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*  ⬇ ENDPOINT NOTIFIKASI MIDTRANS  ⬇  */
Route::match(['get', 'post'], '/callback', [MidtransController::class, 'callback'])
     ->name('midtrans.callback');
