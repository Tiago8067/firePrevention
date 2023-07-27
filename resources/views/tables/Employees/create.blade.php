@extends('layouts.master')

@section('contentCreate')
    <div class="modal-content mt-5">
        <div class="modal-header">
            <h1 class="modal-title fs-3" id="staticBackdropLabel">Registrar Novo Funcionário</h1>
        </div>
        <div class="modal-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label class="form-label" for="">Nome:</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                @error('name')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror

                <div class="form-group">
                    <label class="form-label" for="">E-mail:</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                @error('email')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror

                <div class="form-group">
                    <label class="form-label" for="">Password:</label>
                    <input type="password" class="form-control" name="password" minlength="3" required>
                </div>
                @error('password')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror

                <div class="modal-footer">
                    <a class="btn btn-secondary" href="{{ route('users.index') }}">Voltar Atrás</a>
                    <button type="submit" class="btn btn-success">Registrar Funcionário</button>
                </div>
            </form>
        </div>
    </div>
@endsection
