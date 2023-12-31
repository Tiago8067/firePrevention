<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$veiculos = Veiculo::all();
        $veiculos = Veiculo::paginate(4);
        return view('tables.Vehicles.index', compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tables.Vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $veiculo = new Veiculo();
        $veiculo->marca = $request->marca;
        $veiculo->modelo = $request->modelo;
        $veiculo->matricula = $request->matricula;

        $veiculo->save();

        return redirect()->route('vehicles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $veiculo = Veiculo::FindOrFail($id);
        return view('tables.Vehicles.show', compact('veiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $veiculo = Veiculo::FindOrFail($id);
        return view('tables.Vehicles.edit', compact('veiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::FindOrFail($id);
        $veiculo->marca = $request->marca;
        $veiculo->modelo = $request->modelo;
        $veiculo->matricula = $request->matricula;

        $veiculo->save();

        return redirect()->route('vehicles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $veiculo = Veiculo::FindOrFail($id);

        $veiculo -> delete();

        return redirect()->route('vehicles.index');
    }

    public function trashed()
    {
        $veiculos = Veiculo::onlyTrashed()->get();
        return view('tables.Vehicles.trashed', compact('veiculos'));
    }

    public function restore($id)
    {
        $veiculo = Veiculo::onlyTrashed()->findOrFail($id);

        $veiculo->restore();

        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $veiculo = Veiculo::onlyTrashed()->findOrFail($id);

        $veiculo->forceDelete();

        return redirect()->back();
    }
}
