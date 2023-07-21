<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar Novo Veículo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('vehicles.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label class="form-label" for="">Marca:</label>
                <input type="text" class="form-control" name="marca" placeholder="ex: Renault" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="">Modelo:</label>
                <input type="text" class="form-control" name="modelo" placeholder="ex: Clio" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="">Matrícula:</label>
                <input type="text" class="form-control" name="matricula" placeholder="ex: 12-AB-34"
                    pattern="[A-Z0-9]{2}\-[A-Z0-9]{2}\-[A-Z0-9]{2}" required>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success">Registrar Veículo</button>
            </div>
        </form>
    </div>
</div>
