@extends('layouts.master')

@section('contentShowVehicle')
    {{-- <div class="main-content mt-5 mb-5"> --}}
    <div class="modal-content mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Veículo Número {{ $veiculo->id }}</h3>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-secondary" href="{{ route('vehicles.index') }}">Voltar Atrás</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Marca</label>
                            <p class="form-control-static">{{ $veiculo->marca }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Matrícula</label>
                            <p class="form-control-static">{{ $veiculo->matricula }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Modelo</label>
                            <p class="form-control-static">{{ $veiculo->modelo }}</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Data da Criação</label>
                            <p class="form-control-static">{{ $veiculo->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>

            @if ($veiculo->intervention != '')
            @else
                <div class="card-footer d-grid gap-2 d-md-flex justify-content-md-end">
                    <a type="button" class="btn btn-success" href="{{ route('vehicles.edit', $veiculo->id) }}">Editar</a>

                    <form action="{{ route('vehicles.destroy', $veiculo->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-success">Eliminar</button>
                    </form>
                </div>
            @endif

        </div>
    </div>
@endsection
