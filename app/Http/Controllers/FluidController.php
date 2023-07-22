<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TipoFluido;
use Illuminate\Http\Request;

class FluidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$fluids = TipoFluido::all();
        $fluids = TipoFluido::paginate(4);
        return view('tables.Types_of _fluid.index', compact('fluids'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tables.Types_of _fluid.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fluid = new TipoFluido();
        $fluid->nome = $request->nome;
        $fluid->descricao = $request->descricao;

        $fluid->save();

        return redirect()->route('fluids.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $fluid = TipoFluido::findOrFail($id);
        return view('tables.Types_of _fluid.show', compact('fluid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fluid = TipoFluido::findOrFail($id);
        return view('tables.Types_of _fluid.edit', compact('fluid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fluid = TipoFluido::findOrFail($id);
        $fluid->nome = $request->nome;
        $fluid->descricao = $request->descricao;

        $fluid->save();

        return redirect()->route('fluids.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fluid = TipoFluido::findOrFail($id);

        $fluid -> delete();

        return redirect()->route('fluids.index');
    }

    public function trashed()
    {
        $fluids = TipoFluido::onlyTrashed()->get();
        return view('tables.Types_of _fluid.trashed', compact('fluids'));
    }

    public function restore($id)
    {
        $fluid = TipoFluido::onlyTrashed()->findOrFail($id);

        $fluid->restore();

        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $fluid = TipoFluido::onlyTrashed()->findOrFail($id);

        $fluid->forceDelete();

        return redirect()->back();
    }
}
