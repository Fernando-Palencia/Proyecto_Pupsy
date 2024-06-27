<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            return redirect("/home");
        }
        return view("auth.login");
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (!Auth::attempt($credentials)) {
            // Aquí agregamos un mensaje de error a la sesión
            return redirect()->to('/login')->withErrors(['auth.failed' => 'Correo/Cédula o contraseña incorrecta.'])->withInput();
        }

        return redirect('/home')->with('success', 'Inicio de sesión exitoso!');
    }


    public function authenticated(Request $request, $user)
    {
        return redirect('/home')->with('success', 'Inicio de sesión exitoso!');
    }
}
