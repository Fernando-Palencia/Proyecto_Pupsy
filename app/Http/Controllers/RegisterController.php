<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            return redirect("/home");
        }
        return view("auth.register");
    }

    public function register(RegisterRequest $request)
    {
        $validatedData = $request->validated();

        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->celular = $request->celular;
        $user->ciudad = $request->ciudad;
        $user->email = $request->email;
        $user->password = $request->password;

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $img_user = time() . '_' . $photo->getClientOriginalName(); // Renombrar el archivo para evitar conflictos de nombres
            $ruta = public_path('imgs/imagenes');
            $photo->move($ruta, $img_user);
            $user->photo = $img_user; // Asignar el nombre del archivo a la propiedad 'photo' del usuario
        } else {
            $user->photo = 'Sin imagen'; // Si no se sube ninguna foto, establecer un valor predeterminado
        }


        return redirect('/login')->with('success', 'Usuario registrado correctamente');
    }
}



// $validatedData = $request->validated();

        // // Hash de la contraseña antes de crear el usuario
        // $validatedData['password'] = Hash::make($validatedData['password']);

        // // Establecer valor predeterminado para 'photo' si no se proporciona ninguna imagen
        // if ($request->hasFile('photo')) {
        //     $validatedData['photo_path'] = 'default.jpg'; // Cambia 'default.jpg' según tu necesidad
        // }

        // $user = User::create($validatedData);

        // return redirect('/login')->with('success', 'Usuario registrado correctamente');