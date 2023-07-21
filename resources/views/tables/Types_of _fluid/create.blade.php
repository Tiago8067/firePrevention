<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Criar Tipo de Fluído</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('fluids.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label class="form-label" for="">Nome:</label>
                <input type="text" class="form-control" name="nome" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="">Descrição:</label>
                <textarea name="descricao" type="text" class="form-control"
                    placeholder="Descreva sucintamente a ação do tipo de fluido interno" required></textarea>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success">Criar Tipo de Fluído</button>
            </div>
        </form>
    </div>
</div>
