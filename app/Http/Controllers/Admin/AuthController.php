<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        /* $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]); */

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ], [
            'email.required' => 'O Email tem de ser Preenchido!',
            'email.email' => 'O Email tem de ser Válido!',
            'password.required' => 'A Palavra-Passe tem de ser Preenchida!',
        ]);

        $validated = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
            //'is_admin' => 1
        ], $request->password);

        if ($validated) {
            return redirect()->route('index.home')->with('success', 'Login Successfull');
            //return 'login';
        } else {
            return redirect()->back()->with('error', 'Dados inseridos são Inválidos');
        }
    }

    public function logout()
    {
        auth()->logout();
        
        return redirect()->route('index');
    }
}
