<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Intervention;
use App\Models\TipoFluido;
use Illuminate\Http\Request;

class InterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interventions = Intervention::paginate(4);
        return view('tables.Interventions.index', compact('interventions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposFluidos = TipoFluido::all();
        return view('tables.Interventions.create', compact('tiposFluidos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $intervention = new Intervention();
        $intervention->nome_cliente = 'sol';
        $intervention->data_servico = date('Y-m-d');
        $intervention->servico = $request->servico;
        $intervention->viatura_ou_loja = $request->viatura_ou_loja;
        $intervention->marcacao_CE = $request->marcacao_CE;
        $intervention->nr_interno = $request->nr_interno;
        $intervention->nr_serie = $request->nr_serie;
        $intervention->capacidade_kg = $request->capacidade_kg;
        $intervention->persao_permanente = $request->persao_permanente;
        $intervention->nome_fabricante = $request->nome_fabricante;
        $intervention->ano_fabrico = $request->ano_fabrico;
        $intervention->localizacao = $request->localizacao;
        $intervention->data_ultimo_carregamento = $request->data_ultimo_carregamento;
        $intervention->data_ultima_prova_hidraulica = $request->data_ultima_prova_hidraulica;
        $intervention->manutencao_MNT = $request->manutencao_MNT;
        $intervention->peso_CO2_kg = $request->peso_CO2_kg;
        $intervention->carregamento_MNT_AD = $request->carregamento_MNT_AD;
        $intervention->prova_hidraulica = $request->prova_hidraulica;
        $intervention->selo_seguranca = $request->selo_seguranca;
        $intervention->O_Ring = $request->O_Ring;
        $intervention->cavilha = $request->cavilha;
        $intervention->manometro = $request->manometro;
        $intervention->difusor = $request->difusor;
        $intervention->base_plastica = $request->base_plastica;
        $intervention->rotulo = $request->rotulo;
        $intervention->sparklets_CO2 = $request->sparklets_CO2;
        $intervention->aprovado = $request->aprovado;
        $intervention->extintor_novo = $request->extintor_novo;
        $intervention->motivo_rejeitado = $request->motivo_rejeitado;
        $intervention->observacao = $request->observacao;
        $intervention->tipo = $request->tipo;
        $intervention->tipo_fluidos_id = $request->tiposFluidosId;

        $intervention->save();

        return redirect()->route('interventions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $intervention = Intervention::findOrFail($id);
        return view('tables.Interventions.show', compact('intervention'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $intervention = Intervention::findOrFail($id);
        $tiposFluidos = TipoFluido::all();
        return view('tables.Interventions.edit', compact('intervention', 'tiposFluidos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $intervention = Intervention::findOrFail($id);
        $intervention->nome_cliente = 'sol';
        $intervention->data_servico = date('Y-m-d');
        $intervention->servico = $request->servico;
        $intervention->viatura_ou_loja = $request->viatura_ou_loja;
        $intervention->marcacao_CE = $request->marcacao_CE;
        $intervention->nr_interno = $request->nr_interno;
        $intervention->nr_serie = $request->nr_serie;
        $intervention->capacidade_kg = $request->capacidade_kg;
        $intervention->persao_permanente = $request->persao_permanente;
        $intervention->nome_fabricante = $request->nome_fabricante;
        $intervention->ano_fabrico = $request->ano_fabrico;
        $intervention->localizacao = $request->localizacao;
        $intervention->data_ultimo_carregamento = $request->data_ultimo_carregamento;
        $intervention->data_ultima_prova_hidraulica = $request->data_ultima_prova_hidraulica;
        $intervention->manutencao_MNT = $request->manutencao_MNT;
        $intervention->peso_CO2_kg = $request->peso_CO2_kg;
        $intervention->carregamento_MNT_AD = $request->carregamento_MNT_AD;
        $intervention->prova_hidraulica = $request->prova_hidraulica;
        $intervention->selo_seguranca = $request->selo_seguranca;
        $intervention->O_Ring = $request->O_Ring;
        $intervention->cavilha = $request->cavilha;
        $intervention->manometro = $request->manometro;
        $intervention->difusor = $request->difusor;
        $intervention->base_plastica = $request->base_plastica;
        $intervention->rotulo = $request->rotulo;
        $intervention->sparklets_CO2 = $request->sparklets_CO2;
        $intervention->aprovado = $request->aprovado;
        $intervention->extintor_novo = $request->extintor_novo;
        $intervention->motivo_rejeitado = $request->motivo_rejeitado;
        $intervention->observacao = $request->observacao;
        $intervention->tipo = $request->tipo;
        $intervention->tipo_fluidos_id = $request->tiposFluidosId;

        $intervention->save();

        return redirect()->route('interventions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
