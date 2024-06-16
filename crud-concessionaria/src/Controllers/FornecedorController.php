<?php

namespace php\projeto\Controllers;

use php\projeto\Models\DAO\FornecedorDAO;
use php\projeto\Models\Domain\Fornecedor;

class FornecedorController {
    public function index(){
        $fornecedorDAO = new FornecedorDAO();
        $listFornecedor = $fornecedorDAO->query();

        require_once("../src/Views/fornecedor/index.php");
    }

    public function create() {
        require_once("../src/Views/fornecedor/criar.html");
    }

    public function store(){
        $fornecedor = new Fornecedor(0,$_POST["nome"],$_POST["telefone"],$_POST["cidade"],$_POST["estado"]);
        $fornecedorDAO = new FornecedorDAO();

        if (!$fornecedorDAO->create($fornecedor)) {
            echo "Erro ao inserir";
        }

        header("location: /fornecedor");
    }

    public function edit(array $params) {
        $id = (int)$params[1];
        $fornecedorDAO = new FornecedorDAO();
        $fornecedor = $fornecedorDAO->queryID($id);

        require_once("../src/Views/fornecedor/editar.php");
    }

    public function update(array $params) {
        $id = (int) $params[1];
        
        $fornecedorDAO = new FornecedorDAO();
        $fornecedorAtual = $fornecedorDAO->queryId($id);
        
        if (!$fornecedorAtual) {
            echo "Fornecedor não encontrado";
            return;
        }

        $fornecedor = new Fornecedor(
            $fornecedorAtual['id'],
            $_POST["nome"],
            $_POST["telefone"],
            $_POST["cidade"],
            $_POST["estado"]
        );
    
        if (!$fornecedorDAO->update($fornecedor)) {
            echo "Erro ao alterar";
        }
    
        header("location: /fornecedor");
    }
    

    public function destroy(array $params) {
        $id = (int)$params[1];
        $fornecedorDAO = new FornecedorDAO();

        if (!$fornecedorDAO->delete($id)) {
            echo "Erro ao deletar";
        }

        header("location: /fornecedor");
    }
}