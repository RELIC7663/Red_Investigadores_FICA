<?php

use App\Http\Controllers\AreasInvestigacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Contacto
Route::get('/contacto', function () {
    return view('contacto.contacto');
});

// Quienes Somos
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

// Investigación
Route::get('/Investigacion', function () {
    return view('Investigacion.Investigacion');
});

// Ruta para mostrar las áreas de investigación (vista y controlador)
Route::get('/Investigacion_Areas', [AreasInvestigacionController::class, 'index']);
Route::get('/areas', [AreasInvestigacionController::class, 'index'])->name('areas.index');
Route::post('/areas', [AreasInvestigacionController::class, 'store'])->name('areas.store');
Route::get('/areas/{area}/edit', [AreasInvestigacionController::class, 'edit'])->name('areas.edit');
Route::put('/areas/{area}', [AreasInvestigacionController::class, 'update'])->name('areas.update');
Route::delete('/areas/{area}', [AreasInvestigacionController::class, 'destroy'])->name('areas.destroy');

// Eventos
Route::get('/Eventos', function () {
    return view('Eventos.Eventos');
});

// Rutas de autenticación y registro
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Ruta para procesar el login (POST)
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Ruta para cerrar sesión
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Ruta para mostrar el formulario de registro
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Perfil y configuración (requieren autenticación)
Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::get('/settings', [UserController::class, 'settings'])->name('settings')->middleware('auth');
Route::put('/profile/update', [UserController::class, 'update'])->name('update.profile')->middleware('auth');

// Rutas de administración de usuarios (solo accesibles para administradores)
// Rutas de administración de usuarios (solo accesibles para administradores)
// Rutas de administración de usuarios (solo accesibles para administradores)
Route::middleware(['auth', 'role:administrador'])->group(function () {
    // Listado de usuarios
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    
    // Crear nuevo usuario
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    
    // Editar usuario
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    // Actualizar usuario (se usa updateAdmin para diferenciar del update del perfil)
    Route::put('/user/{user}', [UserController::class, 'updateAdmin'])->name('user.update');
    
    // Eliminar usuario
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    
    // Asignar o quitar roles a un usuario (opcional, si se requiere una ruta separada)
    Route::post('/user/{user}/roles', [UserController::class, 'assignRole'])->name('user.assignRole');
});


