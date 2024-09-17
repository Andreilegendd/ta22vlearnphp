<?php

use App\Controllers\PublicController;
use App\Route;
// PublicController::class => 'App\Controllers\PublicController'
Route::get('/', [PublicController::class, 'index']);

Route::get('/us', [PublicController::class, 'us']);
Route::get('/form', [PublicController::class, 'form']);
Route::post('/form', [PublicController::class, 'answer']);
