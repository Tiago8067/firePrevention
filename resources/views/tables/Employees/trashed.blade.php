@extends('layouts.master')

@section('contentTrash')
    <div class="main-content mt-4 mb-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Todos os Funcionários</h4>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        {{-- <a class="btn btn-success mx-1 border" href="{{ route('users.create') }}" data-placement="top">
                            Criar Novo Funcionário
                        </a>

                        <a class="btn btn-warning mx-1" href="#">Funcionários Apagados</a> --}}
                    </div>

                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <thead style="background: #f2f2f2">
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ver Mais</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="text-center">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                        {{-- <a class="btn btn-outline-secondary btn-icon animated-hover"
                                            href="{{ route('users.edit', $user->id) }}" data-placement="top"
                                            title="Editar Funcionáro">
                                            <i class="far fa-edit"></i>
                                        </a>

                                        <a class="btn btn-outline-secondary btn-icon animated-hover" href=""
                                            data-placement="top" title="Eliminar Funcionáro" data-bs-toggle="modal"
                                            data-bs-target="#deleteUser">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                        <div class="modal fade" id="deleteUser" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteUser"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                @include('tables.Employees.delete')
                                            </div>
                                        </div>

                                        <a class="btn btn-outline-secondary btn-icon animated-hover"
                                            href="{{ route('users.show', $user->id) }}" data-placement="top"
                                            title="Ver Mais Detalhes">
                                            <i class="far fa-eye"></i>
                                        </a> --}}
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
