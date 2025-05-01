<?php
namespace App\Http\Controllers;
header('Content-Type: text/html; charset=UTF-8');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\pregunta;

class AuthController extends Controller
{
    // Mostrar la vista de login
    public function showLogin()
    {
        return view('auth.login_celu');
    }

    // Mostrar la vista de registro
    public function showRegister()
    {
        $preguntas = pregunta::inRandomOrder()->limit(3)->get();
        //return view('auth.registro');
        return view('auth.registro', compact('preguntas'));
    }


    // Procesar login de usuario
    public function login(Request $request)
    {
        /*
        $request->validate([
            'g-recaptcha-response' => 'required|captcha'
        ]);*/

        $credentials = $request->validate([
            'username' => 'required|string',
        ]);

        if (!Auth::attempt($credentials)) {
            return back()->withErrors(['username' => 'Credenciales incorrectas'])->withInput();
        }
    
        return redirect()->route('dashboard');
    }

    // Cerrar sesión
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Sesión cerrada correctamente.');
    }
}
