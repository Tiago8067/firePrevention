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

                        <a class="btn btn-warning mx-1" href="#">Intervenções Apagados</a>
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
                                <td>ID da Fatura</td>
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
                                            href="" data-placement="top" title="Editar Intervenção">
                                            <i class="far fa-file-pdf"></i>
                                        </a>

                                        <a class="btn btn-outline-danger btn-icon animated-hover"
                                            href="" data-placement="top" title="Editar Intervenção">
                                            <i class="far fa-file-alt"></i>
                                        </a>

                                        <a class="btn btn-outline-danger btn-icon animated-hover"
                                            href="" data-placement="top" title="Editar Intervenção">
                                            <i class="fas fa-file-download"></i>
                                        </a>

                                        <a class="btn btn-outline-success btn-icon animated-hover"
                                            href="{{ route('interventions.edit', $intervention->id) }}" data-placement="top" title="Editar Intervenção">
                                            <i class="far fa-edit"></i>
                                        </a>

                                        <form action="{{-- {{ route('interventions.destroy', $intervention->id) }} --}}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button
                                                class="btn btn-outline-warning btn-icon animated-hover"data-placement="top"
                                                title="Eliminar Intervenção"><i class="far fa-trash-alt"></i></button>
                                        </form>

                                        <a class="btn btn-outline-info btn-icon animated-hover"
                                            href="{{ route('interventions.show', $intervention->id) }}" data-placement="top" title="Ver Mais Detalhes">
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
