<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'usuario';
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        // Verifica si el usuario está activo (con estado 'Activo' en la base de datos)
        if ($user->Estado !== 'Activo') {
            auth()->logout(); // Cierra la sesión
            return redirect()->route('login')->with('error','⚠Usuario inactivo. Por favor, contacta al administrador.');
        }

        // Si el usuario está activo, redirige al usuario a la página principal
        return redirect()->intended($this->redirectPath());
    }
}