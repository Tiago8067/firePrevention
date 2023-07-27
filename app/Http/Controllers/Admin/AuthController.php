<?php

namespace App\Http\Controllers\Admin;

// use Mail;
use App\Models\User;
use App\Mail\ForgetPassword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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

        return redirect()->route('login');
    }

    public function indexPassword()
    {
        return view('recuperarPassword');
    }

    public function verificaMailParaEnviar(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email']
        ], [
            'email.required' => 'O Email tem de ser Preenchido!',
            'email.email' => 'O Email tem de ser Válido!'
        ]);

        $email = $request->email;

        $emailExist = User::where('email', '=', $email)->first();

        /* if ($emailExist === null) {
            return redirect()->back()->with('error', 'Email inserido não existe.');
        } else { */
            $mailData = [
                'title' => 'Mail de FirePrevention',
                'body' => 'Este é um primeiro teste',
            ];

            // Mail::to('soarestiago@ipvc.pt')->send(new ForgetPassword($mailData));
            Mail::to($email)->send(new ForgetPassword($mailData));

            return redirect()->route('indexPassword')->with('success', 'Enviamos o link de redefinição de password para o seu e-mail.');
        /* } */
    }

    public function redefinirPassword()
    {
        return view('resetPassword');
    }

    public function redefinirPasswordSave(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email']
        ], [
            'email.required' => 'O Email tem de ser Preenchido!',
            'email.email' => 'O Email tem de ser Válido!'
        ]);

        $email = $request->email;

        $emailExist = User::where('email', '=', $email)->first();

        if ($emailExist === null) {
            return redirect()->back()->with('error', 'Email inserido não existe.');
        } else {

            if ($request->password != $request->confirmPassword) {
                return redirect()->back()->with('error', 'As passwords têm de coincidir.');
            } else {
                $emailExist->password = $request->password;

                $emailExist->save();
    
                return redirect()->route('login');
            }
        }
    }
}
