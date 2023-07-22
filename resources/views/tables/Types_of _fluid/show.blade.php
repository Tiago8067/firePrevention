@extends('layouts.master')

@section('contentShowFluid')
    <div class="modal-content mt-5 mb-5">
        {{-- <div class="main-content mt-5 mb-5"> --}}
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Tipo de Fluído Número {{ $fluid->id }}</h3>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-secondary" href="{{ route('fluids.index') }}">Voltar Atrás</a>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <p class="form-control-static">{{ $fluid->nome }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Data da Criação</label>
                            <p class="form-control-static">{{ $fluid->created_at }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Descrição</label>
                            <p class="form-control-static">{{ $fluid->descricao }}</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
                <a type="button" class="btn btn-success" href="{{ route('fluids.edit', $fluid->id) }}">Editar</a>

                <a type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#deleteFluid">Eliminar</a>
                <div class="modal fade" id="deleteFluid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="deleteFluid" aria-hidden="true">
                    <div class="modal-dialog">
                        @include('tables.Types_of _fluid.delete')
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
