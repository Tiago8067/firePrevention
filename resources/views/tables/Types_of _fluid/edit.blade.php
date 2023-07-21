@extends('layouts.master')

@section('contentEditFluid')
    <div class="modal-content mt-5">
        <div class="modal-header">
            <h5 class="modal-title fs-3" id="staticBackdropLabel">Atualizar Tipo de Fluído</h5>
        </div>
        <div class="modal-body">
            <form action="{{ route('fluids.update', $fluid->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="form-label" for="">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{ $fluid->nome }}" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="">Descrição:</label>
                    {{-- <textarea name="descricao" type="text" class="form-control" value="{{ $fluid->descricao }}"
                        placeholder="Descreva sucintamente a ação do tipo de fluido interno" required></textarea> --}}
                    <textarea name="descricao" type="text" class="form-control"
                        placeholder="Descreva sucintamente a ação do tipo de fluido interno" required>{{ $fluid->descricao }}</textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar Atrás</button>
                    <button type="submit" class="btn btn-success">Atualizar Tipo de Fluído</button>
                </div>
            </form>
        </div>
    </div>
@endsection
