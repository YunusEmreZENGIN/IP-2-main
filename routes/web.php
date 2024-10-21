<?php

use App\Http\Controllers\ConntactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [ConntactController::class, 'index']);
Route::post('/contact ', [ConntactController::class,'store']);
