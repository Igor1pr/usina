<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AutomobileController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SupplieController;
use Illuminate\Support\Facades\Route;

// ----------------------------------------- Home -----------------------------------------

Route::get('/', [SupplieController::class, 'index']);
Route::get('/details/{id}', [SupplieController::class, 'show'])->name('solicitacao.details');
Route::get('/criar-solicitacao', [SupplieController::class, 'create'])->middleware();
Route::post('/', [SupplieController::class, 'store']);
Route::delete('/details/{id}', [SupplieController::class, 'destroy'])->name('solicitacao.details');


// ------------------------------------- Solicitantes -------------------------------------

Route::get('/solicitantes', [ApplicantController::class, 'index']);
Route::get('/criar-solicitante', [ApplicantController::class, 'create'])->middleware();
Route::post('/solicitantes', [ApplicantController::class, 'store']);
Route::delete('/solicitantes/{id}', [ApplicantController::class, 'destroy']);


// -------------------------------------- Materiais ---------------------------------------

Route::get('/materiais', [MaterialController::class, 'index']);
Route::get('/criar-material', [MaterialController::class, 'create'])->middleware();
Route::post('/materiais', [MaterialController::class, 'store']);
Route::delete('/materiais/{id}', [MaterialController::class, 'destroy']);


// -------------------------------------- Motoristas --------------------------------------

Route::get('/motoristas', [DriverController::class, 'index']);
Route::get('/criar-motorista', [DriverController::class, 'create'])->middleware();
Route::post('/motoristas', [DriverController::class, 'store']);
Route::delete('/motoristas/{id}', [DriverController::class, 'destroy']);


// -------------------------------------- Automóveis --------------------------------------

Route::get('/automoveis', [AutomobileController::class, 'index']);
Route::get('/criar-automovel', [AutomobileController::class, 'create'])->middleware();
Route::post('/automoveis', [AutomobileController::class, 'store']);
Route::delete('/automoveis/{id}', [AutomobileController::class, 'destroy']);


// --------------------------------------- Usuário ----------------------------------------

Route::get('/user', function () {
    return view('6-user.user');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
