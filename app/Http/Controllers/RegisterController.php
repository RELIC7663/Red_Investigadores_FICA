<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; // Asegúrate de importar Auth

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // Validar datos del formulario
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crear usuario
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Iniciar sesión automáticamente usando el facade Auth
        Auth::login($user);

        // Redireccionar a la página de inicio o dashboard
        return redirect('/');
    }
}
