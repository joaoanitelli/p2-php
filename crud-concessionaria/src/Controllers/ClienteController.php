<?php

namespace php\projeto\Controllers;

use php\projeto\Models\DAO\ClienteDAO;
use php\projeto\Models\Domain\cliente;

class ClienteController {
    public function index(){
        $clienteDAO = new ClienteDAO();
        $listCliente = $clienteDAO->query();

        require_once("../src/Views/cliente/index.php");
    }

    public function create() {
        require_once("../src/Views/cliente/criar.html");
    }

    public function store(){
        $cliente = new cliente(0,$_POST["nome"],(int)$_POST["cpf"],(string)$_POST["cidade"],(string)$_POST["estado"]);
        $clienteDAO = new ClienteDAO();

        if (!$clienteDAO->create($cliente)) {
            echo "Erro ao inserir";
        }

        header("location: /cliente");
    }

    public function edit(array $params) {
        $id = (int)$params[1];
        $clienteDAO = new ClienteDAO();
        $cliente = $clienteDAO->queryID($id);

        require_once("../src/Views/cliente/editar.php");
    }

    public function update(array $params) {
        $id = (int)$params[1];
        $cliente = new cliente($id,$_POST["nome"],(int)$_POST["cpf"],(string)$_POST["cidade"],(string)$_POST["estado"]);
        $clienteDAO = new ClienteDAO();

        if (!$clienteDAO->update($cliente)) {
            echo "Erro ao alterar";
        }

        header("location: /cliente");
    }

    public function destroy(array $params) {
        $id = (int)$params[1];
        $clienteDAO = new ClienteDAO();

        if (!$clienteDAO->delete($id)) {
            echo "Erro ao deletar";
        }

        header("location: /cliente");
    }
}