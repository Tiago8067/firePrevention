@extends('layouts.master')

@section('contentDelete')
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Funcionário</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="POST">
                @csrf
                @method('delete')

                <div class="form-group">
                    <label class="form-label" for="">Eliminar funcionário número: {{ $user->id }}</label>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Eliminar Funcionário</button>
                </div>
            </form>
        </div>
    </div>
@endsection
