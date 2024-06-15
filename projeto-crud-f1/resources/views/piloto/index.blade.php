<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórmula 1 - Pilotos</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <main>
        <h1 class="title-home">Registro de Pilotos Fórmula 1 2024</h1>
        <a class="button" href="{{route('pilotos.create')}}">INSERIR PILOTO</a>
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Equipe</th>
                    <th>Pontos da Equipe</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pilotos as $c)
                <tr>
                    <td>{{$c->piloto}}</td>
                    <td>{{$c->equipe}}</td>
                    <td>{{$c->ponto}}</td>
                    <td><a href="{{ route('pilotos.edit',$c->id)}}">Alterar</a></td>
                    <td><a href="/pilotos/delete/{{$c->id}}">Excluir</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script>
            let table = new DataTable('#table_id', {
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
                }
            });
        </script>
</body>

</html>