@extends('layouts.master')

@section('contentEdit')
    <div class="modal-content mt-5">
        <div class="modal-header">
            <h5 class="modal-title fs-3" id="staticBackdropLabel">Atualizar Funcionário Número {{ $user->id }}</h5>
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
                    <a class="btn btn-secondary" href="{{ route('users.index') }}">Voltar Atrás</a>
                    <button type="submit" class="btn btn-success">Atualizar Funcionário</button>
                </div>
            </form>
        </div>
    </div>
@endsection
