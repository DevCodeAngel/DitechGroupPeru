<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // Mostrar la vista de edición del perfil
    public function edit()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    // Actualizar los datos del perfil
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validar los datos del formulario
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Actualizar los datos del usuario
        $user->name = $validated['name'];
        $user->email = $validated['email'];

        // Si hay una nueva contraseña, actualizarla
        if (isset($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        // Intentar guardar los datos y manejar posibles errores
        try {
            $user->save();
            return redirect()->route('profile.edit')->with('success', 'Perfil actualizado con éxito.');
        } catch (\Exception $e) {
            return redirect()->route('profile.edit')->withErrors(['error' => 'Ocurrió un error al actualizar el perfil: ' . $e->getMessage()]);
        }
    }
}