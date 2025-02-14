<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    // Muestra el perfil del usuario
    public function profile()
    {
        // Verifica que el usuario esté autenticado antes de devolver la vista
        if (Auth::check()) {
            return view('user.profile', ['user' => Auth::user()]);
        }
    
        return redirect()->route('login'); // Si no está autenticado, redirige a login
    }

    // Muestra la configuración del usuario
    public function settings()
    {
        $user = Auth::user();  // Obtén el usuario autenticado
        return view('user.settings', compact('user'));  // Pasa el usuario a la vista
    }

    // Actualiza los datos del perfil del usuario
    public function update(Request $request)
    {
        /** @var User $user */
        $user = Auth::user(); // <-- Añade esta anotación

        // Validar los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6'
        ]);

        // Actualizar nombre y email
        $user->name = $request->name;
        $user->email = $request->email;

        // Si se proporciona una nueva contraseña, actualizarla
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Guardar los cambios
        $user->save();

        // Redirigir a la página de inicio con un mensaje de éxito
        return redirect('/')->with('success', 'Perfil actualizado correctamente.');

    }
}
