<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Atualizar Funcionário</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="" method="POST">
            @csrf

            <div class="form-group">
                <label class="form-label" for="">Nome:</label>
                <input type="text" class="form-control" name="name" value="">
            </div>

            <div class="form-group">
                <label class="form-label" for="">E-mail:</label>
                <input type="email" class="form-control" name="email" value="">
            </div>

        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-success">Atualizar Funcionário</button>
    </div>
</div>
