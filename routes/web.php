<?php

use App\Http\Controllers\AutomobileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('1-home.home');
});

Route::get('/details', function () {
    return view('1-home.details');
});

Route::get('/solicitante', function () {
    return view('2-solicitante.solicitante');
});

Route::get('/criar-solicitante', function () {
    return view('2-solicitante.create-solicitante');
});

Route::get('/materiais', function () {
    return view('3-materiais.materiais');
});

Route::get('/criar-materiais', function () {
    return view('3-materiais.create-materiais');
});

Route::get('/motorista', function () {
    return view('4-motorista.motorista');
});

Route::get('/criar-motorista', function () {
    return view('4-motorista.create-motorista');
});

// ------------------------------------- Automóveis -------------------------------------

Route::get('/automovel', [AutomobileController::class, 'index']);
Route::get('/criar-automovel', [AutomobileController::class, 'create']);
Route::post('/automovel', [AutomobileController::class, 'store']);

// ---------------------------------------------------------------------------------------

Route::get('/user', function () {
    return view('6-user.user');
});
