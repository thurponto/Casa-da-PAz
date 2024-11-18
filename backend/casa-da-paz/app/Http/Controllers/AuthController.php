<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        // Validação
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // dd($request->all());

        $user = User::where('email', $request->email)->first();

        if ($user->email == $request->email && $user->password == $request->password) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        // Tentativa de autenticação
        // if ($request->only('email', 'password')) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('/admin');
        // }

        // Retorno em caso de falha
        return redirect()->intended('/login');
        return back()->withErrors([

            'email' => 'As credenciais fornecidas estão incorretas.',

        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
