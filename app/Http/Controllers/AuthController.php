<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){

        //Validar
        $fields = $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'min:3', 'confirmed']
        ]);

        //Registrar
        $user = User::create($fields);

        //Login
        Auth::login($user);

        dd('ok');
    }
}
