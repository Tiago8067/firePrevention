<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$users = User::all();
        $users = User::paginate(4);
        return view('tables.Employees.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tables.Employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            //'name' => ['required', 'alpha', 'min:3', 'max:50'],
            'name' => ['required', 'min:3', 'max:50'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ], [
            'name.required' => 'O Nome tem de ser Preenchido!',
            // 'name.alpha' => 'O Nome deve ter apenas letras!',
            'name.min' => 'O Nome tem de ter pelo menos 3 letras!',
            'name.max' => 'O Nome não pode ultrapassar as 50 letras!',
            'email.required' => 'O Email tem de ser Preenchido!',
            'email.email' => 'O Email tem de ser Válido!',
            'password.required' => 'A Palavra-Passe tem de ser Preenchida!',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('tables.Employees.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('tables.Employees.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        
        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user -> delete();

        return redirect()->route('users.index');
    }

    public function trashed()
    {
        $users = User::onlyTrashed()->get();
        return view('tables.Employees.trashed', compact('users'));
    }

    public function restore($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);

        $user->restore();

        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $user = User::onlyTrashed()->findOrFail($id);

        $user->forceDelete();

        return redirect()->back();
    }
}
