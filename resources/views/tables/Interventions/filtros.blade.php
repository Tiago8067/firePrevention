<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Filtros</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('interventions.index') }}" method="GET">
            @csrf

            <div class="form-group row">
                <label for="filter-user" class="col-sm-3 col-form-label">Técnico</label>
                <div class="col-sm-9">
                    <select class="form-control" id="filter-user" name="user">
                        <option value="">Todos</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="filter-client" class="col-sm-3 col-form-label">Cliente</label>
                <div class="col-sm-9">
                    <select class="form-control" name="client_id" id="client_id">
                        <option value="">Escolher um Cliente</option>
                        @foreach ($allDiferentInterventions as $allDiferentIntervention)
                            <option value="{{ $allDiferentIntervention->id }}">
                                {{ $allDiferentIntervention->nome_cliente }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="filter-invoice" class="col-sm-3 col-form-label">ID da
                    Fatura</label>
                <div class="col-sm-9">
                    <select class="form-control" id="filter-invoice" name="invoice">
                        <option value="">Todos</option>
                        @foreach ($allDifInvoices as $allDifInvoice)
                            @if ($allDifInvoice->faturas_id == 0)
                                <option value="{{ $allDifInvoice->id }}">Sem Fatura</option>
                            @else
                                <option value="{{ $allDifInvoice->id }}">{{ $allDifInvoice->faturas_id }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="filter-approved" class="col-sm-3 col-form-label">Aprovado</label>
                <div class="col-sm-9">
                    <select class="form-control" id="filter-approved" name="approved">
                        <option value="">Todos</option>
                        @foreach ($allDifAprovs as $allDifAprov)
                            @if ($allDifAprov->aprovado == 1)
                                <option value="{{ $allDifAprov->id }}">Sim</option>
                            @else
                                <option value="{{ $allDifAprov->id }}">Não</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            {{-- <div class="form-group row">
        <label for="filter-start-date" class="col-sm-3 col-form-label">Intervalo de
            Datas</label>
        <div class="col-sm-9">
            <div class="input-group">
                <input type="date" class="form-control" id="filter-start-date" name="start_date"
                    placeholder="Data inicial">
                <div class="input-group-append">
                    <span class="input-group-text">até</span>
                </div>
                <input type="date" class="form-control" id="filter-end-date" name="end_date"
                    placeholder="Data final">
            </div>
        </div>
        </div> --}}

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success">Aplicar Filtros</button>
            </div>
        </form>
    </div>
</div>
