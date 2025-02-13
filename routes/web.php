<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/estatutos', function () {
    return view('estatutos');
});

Route::get('/objetivos', function () {
    return view('objetivos');
});

Route::get('/directiva', function () {
    return view('directiva');
});

Route::get('/miembros', function () {
    return view('miembros');
});
Route::get('/senescyt', function () {
    return view('senescyt');
});