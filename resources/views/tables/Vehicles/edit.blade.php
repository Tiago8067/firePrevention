@extends('layouts.master')

@section('contentEditVehicle')
    <div class="modal-content mt-5">
        <div class="modal-header">
            <h5 class="modal-title fs-3" id="staticBackdropLabel">Atualizar Veículo Número {{ $veiculo->id }}</h5>
            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <div class="modal-body">
            <form action="{{ route('vehicles.update', $veiculo->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="form-label" for="">Marca:</label>
                    <input type="text" class="form-control" name="marca" value="{{ $veiculo->marca }}" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="">Modelo:</label>
                    <input type="text" class="form-control" name="modelo" value="{{ $veiculo->modelo }}" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="">Matrícula:</label>
                    <input type="text" class="form-control" name="matricula" value="{{ $veiculo->matricula }}" required>
                </div>


                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button> --}}
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar Atrás</button> --}}
                    <a class="btn btn-secondary" href="{{ route('vehicles.index') }}">Voltar Atrás</a>
                    <button type="submit" class="btn btn-success">Atualizar Veículo</button>
                </div>
            </form>
        </div>
    </div>
@endsection
