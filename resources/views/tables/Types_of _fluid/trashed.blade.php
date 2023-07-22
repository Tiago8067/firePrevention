@extends('layouts.master')

@section('contentTrashFluid')
    <div class="main-content mt-4 mb-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Todos os Tipos de Fluídos <strong>Apagados</strong></h4>
                    </div>

                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-secondary" href="{{ route('fluids.index') }}">Voltar Atrás</a>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <thead style="background: #f2f2f2">
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Data da Criação</th>
                            <th scope="col">Ver Mais</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fluids as $fluid)
                            <tr class="text-center">
                                <td>{{ $fluid->id }}</td>
                                <td>{{ $fluid->nome }}</td>
                                <td>{{ $fluid->created_at }}</td>
                                <td>
                                    <div class="d-flex justify-content-around">
                                        <a type="button" class="btn btn-success"
                                            href="{{ route('fluids.restore', $fluid->id) }}">Restaurar</a>

                                        <form action="{{ route('fluids.force_delete', $fluid->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger">Eliminar Permanentemente</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $fluids->links() }} --}}
            </div>
        </div>
    </div>
@endsection
