<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function perfil()
    {
        // Obtener el usuario autenticado
        $user = auth()->user();

        // Verificar que se haya encontrado un usuario
        if ($user) {
            // Retornar la vista de perfil con los datos del usuario
            return view('Perfil', ['user' => $user]);
        } else {
            // Si no se encuentra un usuario autenticado, redirigir al login
            return redirect()->route('login');
        }
    }

    public function actualizarPerfil(Request $request)
    {
        // Obtener el usuario autenticado
        $user = auth()->user();

        // Verificar que se haya encontrado un usuario
        if ($user) {
            // Validar los datos del formulario
            $request->validate([
                'nombre' => 'required',
                'username' => 'required',
                'celular' => 'required',
                'ciudad' => 'required',
                'correo' => 'required|email|unique:users,email,' . $user->id,
                // 'contrasena' => 'nullable|min:8|confirmed',
            ]);

            // Actualizar los datos del usuario
            $user->DB::update([
                'name' => $request->nombre,
                'username' => $request->username,
                'celular' => $request->celular,
                'ciudad' => $request->ciudad,
                'email' => $request->correo,
                // 'password' => $request->contrasena ? bcrypt($request->contrasena) : $user->password,
            ]);

            

            // Redirigir al perfil
            return redirect('/home');
        } else {
            // Si no se encuentra un usuario autenticado, redirigir al login
            return redirect()->route('login');
        }
    }
}