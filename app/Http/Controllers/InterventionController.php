<?php

namespace App\Http\Controllers;

use PDF;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Fatura;
use App\Models\Veiculo;
use App\Models\TipoFluido;
//use Barryvdh\DomPDF\PDF;
use App\Models\Intervention;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendInvoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class InterventionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interventions = Intervention::paginate(4);
        $allDiferentInterventions = Intervention::select('nome_cliente')->distinct()->get();
        $allDifInvoices = Intervention::select('faturas_id')->distinct()->get();
        $allDifAprovs = Intervention::select('aprovado')->distinct()->get();
        $users = User::all();
        return view('tables.Interventions.index', compact('interventions', 'users', 'allDiferentInterventions', 'allDifInvoices', 'allDifAprovs'));
    }

    public function filter()
    {
        /* $interventions = Intervention::paginate(4); */
        $allDiferentInterventions = Intervention::select('nome_cliente')->distinct()->get();
        $allDifInvoices = Intervention::select('faturas_id')->distinct()->get();
        $allDifAprovs = Intervention::select('aprovado')->distinct()->get();
        $users = User::all();

        $interventions = $allDifAprovs::paginate(4);

        return view('tables.Interventions.index', compact('interventions', 'users', 'allDiferentInterventions', 'allDifInvoices', 'allDifAprovs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tiposFluidos = TipoFluido::all();
        $veiculos = Veiculo::all();
        return view('tables.Interventions.create', compact('tiposFluidos', 'veiculos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        // dd($user_id);

        $intervention = new Intervention();
        // $intervention->nome_cliente = 'sol';
        $intervention->nome_cliente = $request->client_name;
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
        if ($request->viatura_ou_loja == 'Cliente') {
            $intervention->veiculos_id = $request->veiculosId;
        } else {
            $intervention->veiculos_id = 0;
        }
        $intervention->faturas_id = 0;
        $intervention->users_id = $user_id;

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
        $veiculos = Veiculo::all();
        return view('tables.Interventions.edit', compact('intervention', 'tiposFluidos', 'veiculos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $intervention = Intervention::findOrFail($id);
        // $intervention->nome_cliente = 'sol';
        $intervention->nome_cliente = $request->client_name;
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
        if ($request->viatura_ou_loja == 'Cliente') {
            $intervention->veiculos_id = $request->veiculosId;
        } else {
            $intervention->veiculos_id = 0;
        }

        $intervention->save();

        return redirect()->route('interventions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $intervention = Intervention::findOrFail($id);

        $intervention->delete();

        return redirect()->route('interventions.index');
    }

    public function trashed()
    {
        $interventions = Intervention::onlyTrashed()->get();
        return view('tables.Interventions.trashed', compact('interventions'));
    }

    public function restore($id)
    {
        $intervention = Intervention::onlyTrashed()->findOrFail($id);

        $intervention->restore();

        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $intervention = Intervention::onlyTrashed()->findOrFail($id);

        $intervention->forceDelete();

        return redirect()->back();
    }

    public function pdf_generator($id)
    {
        // $teste = 'teste';
        // $pdf = PDF::loadView('tables.Interventions.pdf', compact('teste'));

        $intervention = Intervention::findOrFail($id);
        $pdf = PDF::loadView('tables.Interventions.pdf', compact('intervention'));

        return $pdf->download('intervencao.pdf');

        //return $pdf->setPaper('a4')->stream('intervencao.pdf');
    }

    public function create_invoice(Request $request, $id)
    {
        $intervention = Intervention::findOrFail($id);

        return view('tables.Interventions.createFatura', compact('intervention'));
    }

    public function store_invoice(Request $request, $id)
    {
        $intervention = Intervention::findOrFail($id);

        /* $desconto = $request->desconto;
        $valor = $request->valor;

        $totalDescontado = $valor * $desconto;

        $precoFinal = $valor - $totalDescontado; */

        $fatura = new Fatura();
        $fatura->data_criacao = date('Y-m-d');
        $data_expiracao = Carbon::now();
        $fatura->data_expeiracao = $data_expiracao->addYears(1);
        $fatura->valor = $request->valor;
        if ($request->desconto == 0.00) {
            $fatura->desconto = 66;
            $fatura->preco = $request->valor;
        } else {
            $desconto = $request->desconto;
            $valor = $request->valor;

            $totalDescontado = $valor * $desconto;

            $precoFinal = $valor - $totalDescontado;

            $fatura->desconto = $request->desconto;
            $fatura->preco = $precoFinal;
        }

        // $fatura->preco = 10;
        //$fatura->preco = $request->valor * $request->desconto;
        $fatura->observacoes = $request->observacaoFatura;

        $fatura->save();

        $intervention->faturas_id = $fatura->id;

        $intervention->save();

        return redirect()->route('interventions.index');
    }

    public function faturaPdf_generator($id)
    {
        $intervention = Intervention::findOrFail($id);

        $fatura = Fatura::findOrFail($intervention->faturas_id);

        $pdf = PDF::loadView('tables.Interventions.faturaPdf', compact('intervention', 'fatura'));

        return $pdf->download('fatura.pdf');
    }

    public function invoiceSendPDF(Request $request, $id)
    {
        $intervention = Intervention::findOrFail($id);

        $fatura = Fatura::findOrFail($intervention->faturas_id);

        $pdf = PDF::loadView('tables.Interventions.faturaPdf', compact('intervention', 'fatura'));

        $data["email"] = $request->emailSend;
        $data["title"] = "Envio da Fatura";
        $data["body"] = "esperamos que se encontre bem, serve este e-mail para o notificar da fatura referente ha intervenção efetuada por FirePrevention.";

        Mail::send('emails.invoiceSend', $data, function ($message) use ($data, $pdf) {
            $message->to($data["email"])
                ->subject($data["title"]) //;
                ->attachData($pdf->output(), "fatura.pdf");
        });

        return redirect()->back();
    }
}
