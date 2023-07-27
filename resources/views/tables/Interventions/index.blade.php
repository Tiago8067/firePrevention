@extends('layouts.master')

@section('content')
    <div class="main-content mt-4 mb-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Todas as Intervenções</h4>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success mx-1 border" href="{{ route('interventions.create') }}" data-placement="top">
                            Criar Nova Intervenção
                        </a>

                        <a class="btn btn-warning mx-1" href="{{ route('interventions.trashed') }}">Intervenções Apagados</a>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <thead style="background: #f2f2f2">
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Técnico</th>
                            <th scope="col">ID da Fatura</th>
                            <th scope="col">Nome Cliente</th>
                            <th class="col">Nome de Fábrica</th>
                            <th class="col">Número de Série</th>
                            <th class="col">Feito em</th>
                            <th class="col">Aprovado</th>
                            <th class="col">Novo</th>
                            <th class="col">Data</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($interventions as $intervention)
                            <tr class="text-center">
                                <td>{{ $intervention->id }}</td>
                                <td>Técnico</td>
                                <td>
                                    @if ($intervention->faturas_id == 0)
                                        Sem Fatura
                                    @else
                                        {{ $intervention->faturas_id }}
                                        <a href="" data-bs-toggle="modal"
                                            data-bs-target="#sendInvoice-{{ $intervention->faturas_id }}">
                                            <i class="fas fa-paper-plane text-info" title="Enviar fatura por e-mail"></i>
                                        </a>
                                        <div class="modal fade" id="sendInvoice-{{ $intervention->faturas_id }}"
                                            data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                            aria-labelledby="sendInvoice-{{ $intervention->faturas_id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                @include('tables.Interventions.send-invoice')
                                            </div>
                                        </div>
                                    @endif
                                </td>
                                <td>{{ $intervention->nome_cliente }}</td>
                                <td>{{ $intervention->nome_fabricante }}</td>
                                <td>{{ $intervention->nr_serie }}</td>
                                <td>{{ $intervention->viatura_ou_loja }}</td>
                                <td>
                                    @if ($intervention->aprovado == 1)
                                        Sim
                                    @else
                                        Não
                                    @endif
                                </td>
                                <td>
                                    @if ($intervention->extintor_novo == 1)
                                        Sim
                                    @else
                                        Não
                                    @endif
                                </td>
                                <td>{{ $intervention->data_servico }}</td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                        <a class="btn btn-outline-primary btn-icon animated-hover"
                                            href="{{ route('interventions.pdf_generator', $intervention->id) }}"
                                            data-placement="top" title="Gerar Relatótio PDF">
                                            <i class="far fa-file-pdf"></i>
                                        </a>

                                        @if ($intervention->faturas_id == 0)
                                            <a class="btn btn-outline-danger btn-icon animated-hover"
                                                href=" {{ route('interventions.create_invoice', $intervention->id) }}"
                                                data-placement="top" title="Criar Fatura">
                                                <i class="far fa-file-alt"></i>
                                            </a>

                                            <a class="btn btn-outline-success btn-icon animated-hover"
                                                href="{{ route('interventions.edit', $intervention->id) }}"
                                                data-placement="top" title="Editar Intervenção">
                                                <i class="far fa-edit"></i>
                                            </a>

                                            <form action="{{ route('interventions.destroy', $intervention->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    class="btn btn-outline-warning btn-icon animated-hover"data-placement="top"
                                                    title="Eliminar Intervenção"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        @else
                                            <a class="btn btn-outline-danger btn-icon animated-hover"
                                                href="{{ route('interventions.faturaPdf_generator', $intervention->id) }}"
                                                data-placement="top" title="Download Fatura">
                                                <i class="fas fa-file-download"></i>
                                            </a>

                                            <a class="btn btn-outline-secondary btn-icon animated-hover"
                                                href="{{ route('interventions.edit', $intervention->id) }}"
                                                data-placement="top" title="Editar Intervenção"
                                                style="pointer-events: none;">
                                                <i class="far fa-edit"></i>
                                            </a>

                                            {{-- secundary --}}

                                            <form action="{{-- {{ route('interventions.destroy', $intervention->id) }} --}}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    class="btn btn-outline-secondary btn-icon animated-hover"data-placement="top"
                                                    title="Eliminar Intervenção" style="pointer-events: none;"><i
                                                        class="far fa-trash-alt"></i></button>
                                            </form>
                                        @endif

                                        <a class="btn btn-outline-info btn-icon animated-hover"
                                            href="{{ route('interventions.show', $intervention->id) }}"
                                            data-placement="top" title="Ver Mais Detalhes">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $interventions->links() }}
            </div>
        </div>
    </div>
@endsection
