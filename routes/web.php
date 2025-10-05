<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;



Route::get('/', [ContatoController::class, 'index']);

Route::get('/recados/criar', [ContatoController::class, 'create']);

Route::post('/recados', [ContatoController::class, 'store']);