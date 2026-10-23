<?php

use App\Http\Controllers\BpdController;
use App\Http\Controllers\RtController;
use App\Http\Controllers\RwController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/bpd', [BpdController::class, 'index']);
Route::post('/bpd', [BpdController::class, 'store']);
Route::get('/bpd/{id}', [BpdController::class, 'showById']);    
Route::put('/bpd/{id}', [BpdController::class, 'update']);    
Route::delete('/bpd/{id}', [BpdController::class, 'destroy']);    

Route::get('/rw', [RwController::class, 'index']);
Route::post('/rw', [RwController::class, 'store']);
Route::get('/rw/{id}', [RwController::class, 'showById']);    
Route::put('/rw/{id}', [RwController::class, 'update']);    
Route::delete('/rw/{id}', [RwController::class, 'destroy']);    

Route::get('/rt', [RtController::class, 'index']);
Route::post('/rt', [RtController::class, 'store']);
Route::get('/rt/{id}', [RtController::class, 'showById']);    
Route::put('/rt/{id}', [RtController::class, 'update']);    
Route::delete('/rt/{id}', [RtController::class, 'destroy']);    