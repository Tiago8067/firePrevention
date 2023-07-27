@extends('layouts.master')

@section('contentTrashIntervention')
    <div class="main-content mt-4 mb-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Todos os Funcionários <strong>Apagados</strong></h4>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-secondary" href="{{ route('interventions.index') }}">Voltar Atrás</a>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <thead style="background: #f2f2f2">
                        <tr class="text-center">
                            <th scope="col">ID</th>
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
                                        <a type="button" class="btn btn-success"
                                            href="{{ route('interventions.restore', $intervention->id) }}">Restaurar</a>

                                        <form action="{{ route('interventions.force_delete', $intervention->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger">Eliminar Permanentemente</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $users->links() }} --}}
            </div>
        </div>
    </div>
@endsection
