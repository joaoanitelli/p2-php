<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carro</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>Editar Carro</h3>
                <form action="/carro/editar/<?=$carro['id']?>" method="post">
                    <div class="mb-3">
                        <label>Id:</label>
                        <input type="number" class="form-control" disabled value="<?=$carro['id']?>"/>
                    </div>
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo:</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" required value="<?=$carro['modelo']?>">
                    </div>
                    <div class="mb-3">
                        <label for="ano" class="form-label">Ano:</label>
                        <input type="number" class="form-control" value="<?=$carro['ano']?>" name="ano" id="ano" required>
                    </div>
                    <div class="mb-3">
                        <label for="cor" class="form-label">Cor:</label>
                        <input type="text" class="form-control" value="<?=$carro['cor']?>" name="cor" id="cor" required>
                    </div>
                    <div class="mb-3">
                        <label for="valor" class="form-label">Valor:</label>
                        <input type="number" class="form-control" step="0.01" value="<?=$carro['valor']?>" name="valor" id="valor" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="submit" form="delete-form" class="btn btn-danger">Excluir</button>
                </form>
                <form method="POST" action="/carro/deletar/<?=$carro["id"]?>" id="delete-form"></form>
            </div>
        </div>
    </div>
</body>
</html>
