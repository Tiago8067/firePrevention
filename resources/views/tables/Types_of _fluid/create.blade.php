@extends('layouts.master')

@section('contentCreateFluid')
    <div class="modal-content mt-5">
        <div class="modal-header">
            <h1 class="modal-title fs-3" id="staticBackdropLabel">Registrar Novo Tipo de Fluído</h1>
            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <div class="modal-body">
            <form action="{{ route('fluids.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label class="form-label" for="">Nome:</label>
                    <input type="text" class="form-control" name="nome" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="">Descrição:</label>
                    <textarea name="descricao" type="text" class="form-control"
                        placeholder="Descreva sucintamente a ação do tipo de fluido interno" required></textarea>
                </div>

                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button> --}}
                    <a class="btn btn-secondary" href="{{ route('fluids.index') }}">Voltar Atrás</a>
                    <button type="submit" class="btn btn-success">Registrar Tipo de Fluído</button>
                </div>
            </form>
        </div>
    </div>
@endsection
