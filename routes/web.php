<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/eventos', [EventController::class, 'evento']);

Route::get('/criarEvento', [EventController::class, 'criar']);
Route::get('/infor/{id}', [EventController::class, 'show']);

Route::post('/criar', [EventController::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
