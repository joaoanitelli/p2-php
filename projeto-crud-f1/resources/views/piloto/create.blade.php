<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formula 1 - Inserir Piloto</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <main>
        <h1 class="title">Cadastrar piloto</h1>
        <form action="{{ route('pilotos.store')}}" method="POST">
            @CSRF
            <label for="piloto">Nome:</label>
            <input type="text" name="piloto" id="piloto"><br>
            <label for="equipe">Equipe</label>
            <input type="text" name="equipe" id="equipe"><br>
            <label for="ponto">Ponto</label>
            <input type="text" name="ponto" id="ponto"></br>
            <button class="button" type="submit">REGISTRAR</button>
        </form>
        <a href="/pilotos"><button class="button back">VOLTAR</button></a>
    </main>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>