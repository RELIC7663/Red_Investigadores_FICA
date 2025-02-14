<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//contacto
Route::get('/contacto', function () {
    return view('contacto.contacto');
});


//Quienes Somos

Route::get('/estatutos', function () {
    return view('Quienes_somos.estatutos');
});
    
Route::get('/objetivos', function () {
    return view('Quienes_somos.objetivos');
});

Route::get('/directiva', function () {
    return view('Quienes_somos.directiva');
});

Route::get('/miembros', function () {
    return view('Quienes_somos.miembros');
});

Route::get('/senescyt', function () {
    return view('Quienes_somos.senescyt');
});

//Investigación

Route::get('/Investigacion', function () {
    return view('Investigacion.Investigacion');
});