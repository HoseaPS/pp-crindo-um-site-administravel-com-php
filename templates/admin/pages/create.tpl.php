<h3>Administração de Páginas</h3>

<form action="" method="POST">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input name="title" id="pagesTitle" placeholder="Aqui vai o título da página..." type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input type="text" name="url" id="pagesUrl" class="form-control" placeholder="Url amigável, deixe em branco para informar a página inicial...">
        </div>
    </div>

    <div class="form-group">
        //editor de texto
    </div>
    
    <button type="submit" class="btn btn-primary">
        Salvar
    </button>
</form>

<hr>

<a class="btn btn-secondary" href="/admin/pages">voltar</a>