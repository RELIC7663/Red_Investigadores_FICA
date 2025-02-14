<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/Investigacion_Areas', function () {
    return view('Investigacion.AreasInvestigacion');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
//Eventos
Route::get('/Eventos', function () {
    return view('Eventos.Eventos');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Ruta para procesar el login (POST)
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Ruta para cerrar sesión
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Ruta para mostrar el formulario de registro
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Ruta para mostrar el perfil del usuario (con autenticación)
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');

// Ruta para la configuración del usuario (con autenticación)
Route::get('/settings', [UserController::class, 'settings'])->name('settings')->middleware('auth');

Route::put('/profile/update', [UserController::class, 'update'])->name('update.profile')->middleware('auth');
