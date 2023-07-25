@extends('layouts.master')

@section('content')
    <div class="mt-2 pt-1">
        <h1 class="mb-4">Informações:</h1>
        <div class="row">
            <div class="col-md-3 d-flex">
                <div class="card rounded shadow-sm h-100 w-100" data-toggle="modal" data-target="#funcionarios"
                    style="background-color: #a6c1ee; color: black;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user"></i> Funcionários</h5>
                        <p class="card-text">Existem 6 funcionários registados.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex">
                <div class="card rounded shadow-sm h-100 w-100" data-toggle="modal" data-target="#veiculos"
                    style="background-color: #b2d8b2; color: black;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-car"></i> Veículos</h5>
                        <p class="card-text">Existem 6 funcionários registados.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex">
                <div class="card rounded shadow-sm h-100 w-100" data-toggle="modal" data-target="#intervencoes"
                    style="background-color: #f5e79e; color: black;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-wrench"></i> Intervenções</h5>
                        <p class="card-text">Existem 6 funcionários registados.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex">
                <div class="card rounded shadow-sm h-100 w-100" data-toggle="modal" data-target="#clientes"
                    style="background-color: #f2a29e; color: black;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-users"></i> Clientes</h5>
                        <p class="card-text">Existem 6 funcionários registados.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="modal fade show" id="funcionarios" tabindex="-1" aria-labelledby="exampleModalLabel"
            style="display: block; padding-right: 17px;" aria-modal="true" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Intervenções por Funcionário</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <canvas id="user-interventions-chart" width="699" height="349"
                            style="display: block; box-sizing: border-box; height: 233px; width: 466px;"></canvas>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    </div>
@endsection
