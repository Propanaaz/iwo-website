<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/history', [DashboardController::class, 'history']);
Route::get('/rulers', [DashboardController::class, 'rulers']);
Route::get('/contacts', [DashboardController::class, 'contacts']);