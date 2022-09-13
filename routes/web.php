<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/eventos', [EventController::class, 'evento']);

Route::get('/criarEvento', [EventController::class, 'criar']);
Route::get('/infor/{id}', [EventController::class, 'show']);

Route::post('/criar', [EventController::class, 'store']);
