@extends('layouts.master')

@section('contentTrashFluid')
    <div class="main-content mt-4 mb-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Todos os Tipos de Fluídos</h4>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        {{-- <a class="btn btn-success mx-1 border" href="{{ route('fluids.create') }}" data-placement="top">
                            Criar Novo Tipo de Fluído
                        </a>

                        <a class="btn btn-warning mx-1" href="#">Tipos de Fluídos Apagados</a> --}}
                    </div>

                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <thead style="background: #f2f2f2">
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Data da Criação</th>
                            <th scope="col">Ver Mais</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fluids as $fluid)
                            <tr class="text-center">
                                <td>{{ $fluid->id }}</td>
                                <td>{{ $fluid->nome }}</td>
                                <td>{{ $fluid->created_at }}</td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                        {{-- <a class="btn btn-outline-secondary btn-icon animated-hover"
                                            href="{{ route('fluids.edit', $fluid->id) }}" data-placement="top"
                                            title="Editar Tipo de Fluído">
                                            <i class="far fa-edit"></i>
                                        </a>

                                        <a class="btn btn-outline-secondary btn-icon animated-hover" href=""
                                            data-placement="top" title="Eliminar Tipo de Fluído" data-bs-toggle="modal"
                                            data-bs-target="#deleteFluid">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        <div class="modal fade" id="deleteFluid" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteFluid"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                @include('tables.Types_of _fluid.delete')
                                            </div>
                                        </div>

                                        <a class="btn btn-outline-secondary btn-icon animated-hover"
                                            href="{{ route('fluids.show', $fluid->id) }}" data-placement="top"
                                            title="Ver Mais Detalhes">
                                            <i class="far fa-eye"></i>
                                        </a> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $fluids->links() }} --}}
            </div>
        </div>
    </div>
@endsection
