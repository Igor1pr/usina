<?php

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

Route::get('/automovel', function () {
    return view('5-automovel.automovel');
});

Route::get('/criar-automovel', function () {
    return view('5-automovel.create-automovel');
});

Route::get('/user', function () {
    return view('6-user.user');
});
