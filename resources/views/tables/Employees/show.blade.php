@extends('layouts.master')

@section('contentShow')
    <div class="modal-content mt-5 mb-5">
        {{-- <div class="main-content mt-5 mb-5"> --}}
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Funcionário Número {{ $user->id }}</h3>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-secondary" href="{{ route('users.index') }}">Voltar Atrás</a>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <p class="form-control-static">{{ $user->name }}</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Email</label>
                            <p class="form-control-static">{{ $user->email }}</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Data da Criação</label>
                            <p class="form-control-static">{{ $user->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
                {{-- <a class="btn btn-success" data-toggle="modal" data-target="#editUser">Editar</a> --}}
                {{-- <a type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editUser">Editar</a> --}}
                {{-- <div class="modal fade" id="editUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="editUser" aria-hidden="true">
                    <div class="modal-dialog">
                        @include('tables.Employees.edit')
                    </div>
                </div> --}}
                <a type="button" class="btn btn-success" href="{{ route('users.edit', $user->id) }}">Editar</a>

                {{-- <a type="button" class="btn btn-success" data-toggle="modal" data-target="#deleteUser">Eliminar</a> --}}
                <a type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#deleteUser">Eliminar</a>
                <div class="modal fade" id="deleteUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="deleteUser" aria-hidden="true">
                    <div class="modal-dialog">
                        @include('tables.Employees.delete')
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
