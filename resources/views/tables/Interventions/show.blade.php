@extends('layouts.master')

@section('contentShowIntervention')
    <div class="modal-content mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Intervenção Número {{ $intervention->id }}</h3>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-secondary" href="{{ route('interventions.index') }}">Voltar Atrás</a>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td>{{ $intervention->id }}</td>
                        </tr>
                        <tr>
                            <td>Data de Criação</td>
                            <td>{{ $intervention->data_servico }}</td>
                        </tr>
                        <tr>
                            <td>Local</td>
                            <td>{{ $intervention->viatura_ou_loja }}</td>
                        </tr>
                        <tr>
                            <td>ID do Carro</td>
                            @if (
                                $intervention->veiculos_id == 0)
                                <td>Avaliação realizada em loja</td>
                            @else
                                <td>{{ $intervention->veiculo->marca }}-{{ $intervention->veiculo->modelo }}-{{ $intervention->veiculo->matricula }}
                                </td>
                            @endif
                        </tr>
                        <tr>
                            <td>Técnico</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Número Interno</td>
                            <td>{{ $intervention->nr_interno }}</td>
                        </tr>
                        <tr>
                            <td>Número de Série</td>
                            <td>{{ $intervention->nr_serie }}</td>
                        </tr>
                        <tr>
                            <td>Tipo de Fluido</td>
                            <td>{{ $intervention->tipoFluido->nome }}</td>
                        </tr>
                        <tr>
                            <td>Capacidade em (kg)</td>
                            <td>{{ $intervention->capacidade_kg }}</td>
                        </tr>
                        <tr>
                            <td>Nome da Fábrica</td>
                            <td>{{ $intervention->nome_fabricante }}</td>
                        </tr>
                        <tr>
                            <td>Data da Fábrica</td>
                            <td>{{ $intervention->ano_fabrico }}</td>
                        </tr>
                        <tr>
                            <td>Marcação CE</td>
                            <td>
                                @if ($intervention->marcacao_CE == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Localização</td>
                            <td>{{ $intervention->localizacao }}</td>
                        </tr>
                        <tr>
                            <td>Última Carga</td>
                            <td>{{ $intervention->data_ultimo_carregamento }}</td>
                        </tr>
                        <tr>
                            <td>Último Teste Hidráulico</td>
                            <td>{{ $intervention->data_ultima_prova_hidraulica }}</td>
                        </tr>
                        <tr>
                            <td>Manutenção MNT</td>
                            <td>
                                @if ($intervention->manutencao_MNT == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Carga MNT AD</td>
                            <td>
                                @if ($intervention->carregamento_MNT_AD == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Tipo</td>
                            <td>{{ $intervention->tipo }}</td>
                        </tr>
                        <tr>
                            <td>Peso CO2</td>
                            <td>{{ $intervention->peso_CO2_kg }}</td>
                        </tr>
                        <tr>
                            <td>Prova Hidráulica</td>
                            <td>
                                @if ($intervention->prova_hidraulica == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Selo de Segurança</td>
                            <td>
                                @if ($intervention->selo_seguranca == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>O-Ring</td>
                            <td>
                                @if ($intervention->O_Ring == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Cavilha</td>
                            <td>
                                @if ($intervention->cavilha == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Manômetro</td>
                            <td>
                                @if ($intervention->manometro == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Difusor</td>
                            <td>
                                @if ($intervention->difusor == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Base de plástico</td>
                            <td>
                                @if ($intervention->base_plastica == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Rótulo</td>
                            <td>
                                @if ($intervention->rotulo == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Sparkles</td>
                            <td>
                                @if ($intervention->sparklets_CO2 == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Aprovado</td>
                            <td>
                                @if ($intervention->aprovado == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Novo</td>
                            <td>
                                @if ($intervention->extintor_novo == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Fora de Serviço</td>
                            <td>
                                @if ($intervention->servico == 1)
                                    Sim
                                @else
                                    Não
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Motivo de Rejeição</td>
                            <td>{{ $intervention->motivo_rejeitado }}
                            </td>
                        </tr>
                        <tr>
                            <td>ID da Fatura</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Observações</td>
                            <td>{{ $intervention->observacao }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
                <a type="button" class="btn btn-success"
                    href="{{ route('interventions.edit', $intervention->id) }}">Editar</a>

                <form action="" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-success">Eliminar</i></button>
                </form>
            </div>

        </div>
    </div>
@endsection
