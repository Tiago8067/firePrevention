@extends('layouts.master')

@section('contentTrashVehicle')
    <div class="main-content mt-4 mb-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Todos os Veículos <strong>Apagados</strong></h4>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-secondary" href="{{ route('vehicles.index') }}">Voltar Atrás</a>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <thead style="background: #f2f2f2">
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Matrícula</th>
                            <th scope="col">Mais Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($veiculos as $veiculo)
                            <tr class="text-center">
                                <td>{{ $veiculo->id }}</td>
                                <td>{{ $veiculo->marca }}</td>
                                <td>{{ $veiculo->modelo }}</td>
                                <td>{{ $veiculo->matricula }}</td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                        <a type="button" class="btn btn-success"
                                            href="{{ route('vehicles.restore', $veiculo->id) }}">Restaurar</a>

                                        <form action="{{ route('vehicles.force_delete', $veiculo->id) }}" method="POST">
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
                {{-- {{ $veiculos->links() }} --}}
            </div>
        </div>
    </div>
@endsection
