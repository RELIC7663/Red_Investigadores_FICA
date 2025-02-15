<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role; // Asegúrate de importar Role

class UserController extends Controller
{
    // MÉTODOS PARA EL PERFIL Y CONFIGURACIÓN (ya existentes)

    // Muestra el perfil del usuario
    public function profile()
    {
        if (Auth::check()) {
            return view('user.profile', ['user' => Auth::user()]);
        }
        return redirect()->route('login');
    }

    // Muestra la configuración del usuario
    public function settings()
    {
        $user = Auth::user();
        return view('user.settings', compact('user'));
    }

    // Actualiza los datos del perfil del usuario
    public function update(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6'
        ]);

        $user->name  = $request->name;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect('/')->with('success', 'Perfil actualizado correctamente.');
    }

    // MÉTODOS PARA LA ADMINISTRACIÓN DE USUARIOS (solo accesibles para administradores)

    // Listado de usuarios
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    // Muestra el formulario para crear un nuevo usuario
    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
    }

    // Guarda el nuevo usuario
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        if ($request->has('role')) {
            $user->assignRole($request->role);
        }

        return redirect()->route('user.index')->with('success', 'Usuario creado correctamente.');
    }

    // Muestra el formulario para editar un usuario
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('user.edit', compact('user', 'roles'));
    }

    // Actualiza los datos del usuario
    public function updateAdmin(Request $request, User $user)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6'
        ]);

        $user->name  = $validated['name'];
        $user->email = $validated['email'];
        if (!empty($validated['password'])) {
            $user->password = bcrypt($validated['password']);
        }
        $user->save();

        if ($request->has('role')) {
            $user->syncRoles($request->role);
        }

        return redirect()->route('user.index')->with('success', 'Usuario actualizado correctamente.');
    }

    // Elimina un usuario
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Usuario eliminado correctamente.');
    }

    // Asigna o actualiza el rol de un usuario (si se requiere usar una ruta separada)
    public function assignRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|string|exists:roles,name',
        ]);
        $user->syncRoles($request->role);
        return redirect()->route('user.index')->with('success', 'Rol actualizado correctamente.');
    }
}
