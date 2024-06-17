<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AutomobileController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SupplieController;
use Illuminate\Support\Facades\Route;

// ----------------------------------------- Home -----------------------------------------

Route::redirect('/', '/solicitacoes');
Route::redirect('/dashboard', '/solicitacoes');
Route::get('/solicitacoes', [SupplieController::class, 'index']);
Route::get('/solicitacoes/details/{id}', [SupplieController::class, 'show'])->name('solicitacao.details');
Route::get('/solicitacoes/criar-solicitacao', [SupplieController::class, 'create'])->middleware('auth');
Route::post('/solicitacoes', [SupplieController::class, 'store']);
Route::delete('/solicitacoes/details/{id}', [SupplieController::class, 'destroy'])->middleware('auth');
Route::get('/solicitacoes/details/edit/{id}', [SupplieController::class, 'edit'])->name('solicitacao.edit')->middleware('auth');
Route::put('/solicitacoes/details/update/{id}', [SupplieController::class, 'update'])->middleware('auth');


// ------------------------------------- Solicitantes -------------------------------------

Route::get('/solicitantes', [ApplicantController::class, 'index']);
Route::get('/criar-solicitante', [ApplicantController::class, 'create'])->middleware('auth');
Route::post('/solicitantes', [ApplicantController::class, 'store']);
Route::delete('/solicitantes/{id}', [ApplicantController::class, 'destroy'])->middleware('auth');


// -------------------------------------- Materiais ---------------------------------------

Route::get('/materiais', [MaterialController::class, 'index']);
Route::get('/criar-material', [MaterialController::class, 'create'])->middleware('auth');
Route::post('/materiais', [MaterialController::class, 'store']);
Route::delete('/materiais/{id}', [MaterialController::class, 'destroy'])->middleware('auth');


// -------------------------------------- Motoristas --------------------------------------

Route::get('/motoristas', [DriverController::class, 'index']);
Route::get('/criar-motorista', [DriverController::class, 'create'])->middleware('auth');
Route::post('/motoristas', [DriverController::class, 'store']);
Route::delete('/motoristas/{id}', [DriverController::class, 'destroy'])->middleware('auth');


// -------------------------------------- Automóveis --------------------------------------

Route::get('/automoveis', [AutomobileController::class, 'index']);
Route::get('/criar-automovel', [AutomobileController::class, 'create'])->middleware('auth');
Route::post('/automoveis', [AutomobileController::class, 'store']);
Route::delete('/automoveis/{id}', [AutomobileController::class, 'destroy'])->middleware('auth');


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
