<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/eventos', [EventController::class, 'evento']);

Route::get('/criarEvento', [EventController::class, 'criar'])->middleware('auth');
Route::get('/infor/{id}', [EventController::class, 'show']);

Route::post('/criar', [EventController::class, 'store']);
Route::get('/dashboard',[EventController::class,'dash']);
Route::get('/evento/{id}',[EventController::class,'deletar']);
Route::get('/evento/{id}',[EventController::class,'editar']);


