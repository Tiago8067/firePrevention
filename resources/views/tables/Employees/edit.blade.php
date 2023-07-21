@extends('layouts.master')

@section('contentEdit')
    <div class="modal-content mt-5">
        <div class="modal-header">
            <h5 class="modal-title fs-3" id="staticBackdropLabel">Atualizar Funcionário</h5>
            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <div class="modal-body">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="form-label" for="">Nome:</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="">E-mail:</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                </div>

                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button> --}}
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar Atrás</button>
                    <button type="submit" class="btn btn-success">Atualizar Funcionário</button>
                </div>
            </form>
        </div>
    </div>
@endsection
