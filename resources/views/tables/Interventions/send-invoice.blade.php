<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Enviar Fatura por E-mail</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('interventions.invoiceSendPDF', $intervention->id) }}" method="POST">
            @csrf

            <div class="form-group">
                <div class="form-group row">
                    <label for="email-{{ $intervention->faturas_id }}" class="col-sm-3 col-form-label">E-mail</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email-{{ $intervention->faturas_id }}" name="email" required>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </form>
    </div>
</div>