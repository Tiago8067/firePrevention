@extends('layouts.master')

@section('content')
    <div class="mt-2 pt-1">
        <h1 class="mb-4">Informações:</h1>
        <div class="row">
            <div class="col-md-3 d-flex">
                <div class="card rounded shadow-sm h-100 w-100" data-toggle="modal" data-target="#user-per-interventions-chart"
                    style="background-color: #a6c1ee; color: black;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user"></i> Funcionários</h5>
                        <p class="card-text">Existem 6 funcionários registados.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex">
                <div class="card rounded shadow-sm h-100 w-100" data-toggle="modal" data-target="#user-per-interventions-chart"
                    style="background-color: #b2d8b2; color: black;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-car"></i> Veículos</h5>
                        <p class="card-text">Existem 6 funcionários registados.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex">
                <div class="card rounded shadow-sm h-100 w-100" data-toggle="modal" data-target="#user-per-interventions-chart"
                    style="background-color: #f5e79e; color: black;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-wrench"></i> Intervenções</h5>
                        <p class="card-text">Existem 6 funcionários registados.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 d-flex">
                <div class="card rounded shadow-sm h-100 w-100" data-toggle="modal" data-target="#user-per-interventions-chart"
                    style="background-color: #f2a29e; color: black;">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-users"></i> Clientes</h5>
                        <p class="card-text">Existem 6 funcionários registados.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">

        </div>
    </div>
    </div>
@endsection
