<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filiais</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Filiais
            </div>
            <div class="card-body">
                <table id="table" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          if($listFilial != null){
                              foreach ($listFilial as $filial){
                                  echo "<tr onclick=\"window.location = '/filial/editar/{$filial['id']}'\" ><td>{$filial['id']}</td><td>{$filial['nome']}</td><td>{$filial['telefone']}</td><td>{$filial['cidade']}</td><td>{$filial['estado']}</td></tr>";
                              }
                          }
                      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#table').DataTable({
                pagingType: 'simple_numbers',
                language: {
                    url:"https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
                },
                layout: {
                    topStart: {
                        buttons: [
                            {
                                text: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16"><path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/></svg> Adicionar Filial',
                                className:'btn btn-primary',
                                action: function (e, dt, node, config) {
                                    window.location.href = '/filial/criar';
                                }
                            }
                        ]
                    }
                }
            });
        } );
    </script>
</body>
</html>