@extends('layouts.master')

@section('content')
    <div class="main-content mt-4 mb-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Todos os Funcionários</h4>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success mx-1 border" href="{{ route('users.create') }}" data-placement="top">
                            Criar Novo Funcionário
                        </a>

                        <a class="btn btn-warning mx-1" href="{{ route('users.trashed') }}">Funcionários Apagados</a>
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
                                        @if ($user->intervention != '')
                                            <a class="btn btn-outline-secondary btn-icon animated-hover"
                                                href="{{ route('users.edit', $user->id) }}" data-placement="top"
                                                title="Editar Funcionáro" style="pointer-events: none;">
                                                <i class="far fa-edit"></i>
                                            </a>

                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    class="btn btn-outline-secondary btn-icon animated-hover"data-placement="top"
                                                    title="Eliminar Funcionáro"style="pointer-events: none;">
                                                    <i class="far fa-trash-alt"></i></button>
                                            </form>
                                        @else
                                            <a class="btn btn-outline-success btn-icon animated-hover"
                                                href="{{ route('users.edit', $user->id) }}" data-placement="top"
                                                title="Editar Funcionáro">
                                                <i class="far fa-edit"></i>
                                            </a>

                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    class="btn btn-outline-warning btn-icon animated-hover"data-placement="top"
                                                    title="Eliminar Funcionáro">
                                                    <i class="far fa-trash-alt"></i></button>
                                            </form>
                                        @endif

                                        <a class="btn btn-outline-info btn-icon animated-hover"
                                            href="{{ route('users.show', $user->id) }}" data-placement="top"
                                            title="Ver Mais Detalhes">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
