@extends('layouts.master')

@section('content')
    <div class="main-content mt-4 mb-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Todos os Tipos de Fluídos</h4>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">

                        {{-- <button type="button" class="btn btn-success mx-1 border" data-bs-toggle="modal"
                        data-bs-target="#createUser">Criar
                        Novo Tipo de Fluído</button>
                    <div class="modal fade" id="createUser" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="createUser" aria-hidden="true">
                        <div class="modal-dialog">
                            @include('tables.Types_of _fluid.create')
                        </div>
                    </div> --}}
                        <a class="btn btn-success mx-1 border" href="{{ route('fluids.create') }}" data-placement="top">
                            Criar Novo Tipo de Fluído
                        </a>

                        <a class="btn btn-warning mx-1" href="{{ route('fluids.trashed') }}">Tipos de Fluídos Apagados</a>
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
                                        @if ($fluid->intervention != '')
                                            <a class="btn btn-outline-secondary btn-icon animated-hover"
                                                href="{{ route('fluids.edit', $fluid->id) }}" data-placement="top"
                                                title="Editar Tipo de Fluído" style="pointer-events: none;">
                                                <i class="far fa-edit"></i>
                                            </a>

                                            <form action="{{ route('fluids.destroy', $fluid->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    class="btn btn-outline-secondary btn-icon animated-hover"data-placement="top"
                                                    title="Eliminar Tipo de Fluído" style="pointer-events: none;"><i
                                                        class="far fa-trash-alt"></i></button>
                                            </form>
                                        @else
                                            <a class="btn btn-outline-success btn-icon animated-hover"
                                                href="{{ route('fluids.edit', $fluid->id) }}" data-placement="top"
                                                title="Editar Tipo de Fluído">
                                                <i class="far fa-edit"></i>
                                            </a>

                                            <form action="{{ route('fluids.destroy', $fluid->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    class="btn btn-outline-warning btn-icon animated-hover"data-placement="top"
                                                    title="Eliminar Tipo de Fluído"><i
                                                        class="far fa-trash-alt"></i></button>
                                            </form>
                                        @endif

                                        <a class="btn btn-outline-info btn-icon animated-hover"
                                            href="{{ route('fluids.show', $fluid->id) }}" data-placement="top"
                                            title="Ver Mais Detalhes">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $fluids->links() }}
            </div>
        </div>
    </div>
@endsection
