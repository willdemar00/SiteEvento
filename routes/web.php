<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
.| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\EventController;

Route::get('/',[EventController::class,'index']);

Route::get('/eventos',[EventController::class,'evento']);

Route::get('/criarEvento',[EventController::class,'criar']);
