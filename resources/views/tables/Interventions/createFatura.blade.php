@extends('layouts.master')

@section('contentCreateIntervention')
    <div class="modal-content mt-5 mb-5">
        <div class="modal-header">
            <h1 class="modal-title fs-3" id="staticBackdropLabel">Criar Fatura</h1>
        </div>
        <div class="modal-body">
            <form action="{{ route('interventions.store_invoice', $intervention->id) }}" method="POST">
                @csrf

                <div class="form-group">
                    <label class="col-form-label" for="valor">Valor</label>
                    <div class="input-group-append">
                        <input name="valor" id="valor" type="number" min="0" step="0.01"
                            class="form-control" placeholder="Valor do Desconto" required>
                        <span class="input-group-text">€</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="desconto">Desconto</label>
                    <div class="input-group-append">
                        <input name="desconto" id="desconto" type="number" min="0" step="0.01"
                            class="form-control" placeholder="Valor do Desconto" required>
                        <span class="input-group-text">€</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="observacaoFatura">Observações</label>
                    <textarea name="observacaoFatura" id="observacaoFatura" type="text" class="form-control"
                        placeholder="Escrever observações extra" autocomplete="false"></textarea>
                </div>


                <div class="modal-footer">
                    <a class="btn btn-secondary" href="{{ route('interventions.index') }}">Voltar Atrás</a>
                    <button type="submit" class="btn btn-success">Registrar Fatura</button>
                </div>
            </form>
        </div>
    </div>
@endsection
