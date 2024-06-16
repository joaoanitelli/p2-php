<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>Editar Fornecedor</h3>
                <form action="/fornecedor/editar/<?=$fornecedor['id']?>" method="post">
                    <div class="mb-3">
                        <label>Id:</label>
                        <input type="number" class="form-control " disabled value="<?=$fornecedor['id']?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required value="<?=$fornecedor['nome']?>">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" required value="<?=$fornecedor['telefone']?>">
                    </div>
                    <div class="mb-3">
                        <label for="cidade" class="form-label">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" required value="<?=$fornecedor['cidade']?>">
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado:</label>
                        <input type="text" class="form-control" id="estado" name="estado" required value="<?=$fornecedor['estado']?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="submit" form="delete-form" class="btn btn-danger">Excluir</button>
                </form>
                <form method="POST" action="/fornecedor/deletar/<?=$fornecedor["id"]?>" id="delete-form"></form>
            </div>
        </div>
    </div>
</body>
</html>