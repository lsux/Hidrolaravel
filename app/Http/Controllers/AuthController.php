<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){

        //Validar register
        $fields = $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:3', 'confirmed']
        ]);

        //Registrar
        $user = User::create($fields);

        //Login
        Auth::login($user);

        //Redirect
        return redirect()->route('home');
    }

    public function login(Request $request){

        //Validar login
        $fields = $request->validate([
            'email' => ['required', 'max:255', 'email', 'exists:App\Models\User,email'],
            'password' => ['required', 'min:3']
        ]);

        //Try to login the user
        if (Auth::attempt($fields, $request->remember)){
            return redirect()->intended();
        } else {
            return back()->eithErrors([
                'failed' => 'Las credenciales no coinciden con nuestros registros.'
            ]);
        }

        // dd($fields);
    }

    public function logout(Request $request){

        //Logout the user
        Auth::logout();

        //Invalidate user's session
        $request->session()->invalidate();

        //Regenerate @csrf token
        $request->session()->regenerateToken();

        //Redirect to home
        return redirect('/');
    }
}
