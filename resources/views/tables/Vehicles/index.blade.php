@extends('layouts.master')

@section('content')
    <div class="main-content mt-4 mb-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Todos os Veículos</h4>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        {{-- <a class="btn btn-success mx-1" data-toggle="modal" data-target="#createUser">Criar Novo Funcionário</a> --}}

                        {{-- <button type="button" class="btn btn-success mx-1 border" data-bs-toggle="modal"
                            data-bs-target="#createUser">Criar
                            Novo Veículo</button>
                        <div class="modal fade" id="createUser" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="createUser" aria-hidden="true">
                            <div class="modal-dialog">
                                @include('tables.Vehicles.create')
                            </div>
                        </div> --}}
                        <a class="btn btn-success mx-1 border" href="{{ route('vehicles.create') }}" data-placement="top"
                            title="Editar Funcionáro">
                            Criar Novo Veículo
                        </a>

                        <a class="btn btn-warning mx-1" href="#">Veículos Apagados</a>
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
                            <th scope="col">Ver Mais</th>
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
                                        <a class="btn btn-outline-secondary btn-icon animated-hover"
                                            href="{{ route('vehicles.edit', $veiculo->id) }}" data-placement="top"
                                            title="Editar Veículo">
                                            <i class="far fa-edit"></i>
                                        </a>

                                        <a class="btn btn-outline-secondary btn-icon animated-hover" href=""
                                            data-placement="top" title="Eliminar Veículo" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        <div class="modal fade" id="deleteVehicle" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteVehicle"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                @include('tables.Vehicles.delete')
                                            </div>
                                        </div>

                                        <a class="btn btn-outline-secondary btn-icon animated-hover"
                                            href="{{ route('vehicles.show', $veiculo->id) }}" data-placement="top"
                                            title="Ver Mais Detalhes">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $veiculos->links() }}
            </div>
        </div>
    </div>
@endsection
