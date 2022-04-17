<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;



Route::get('/', [TaskController::class, 'index']);

Route::post('/store', [TaskController::class, 'store']);

Route::post('/delete/{id}', [TaskController::class, 'delete']);

Route::post('/edite/{id}', [TaskController::class, 'edite']);
Route::post('/update/{id}', [TaskController::class, 'update']);
