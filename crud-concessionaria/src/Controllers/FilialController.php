<?php

namespace php\projeto\Controllers;

use php\projeto\Models\DAO\FilialDAO;
use php\projeto\Models\Domain\Filial;

class FilialController {
    public function store(){
        $filial = new Filial(0, $_POST["nome"], (string)$_POST["telefone"], (string)$_POST["cidade"], (string)$_POST["estado"]);
        $filialDAO = new FilialDAO();

        if (!$filialDAO->create($filial)) {
            echo "Erro ao inserir";
        }

        header("location: /filial");
    }

    public function index(){
        $filialDAO = new FilialDAO();
        $listFilial = $filialDAO->query();

        require_once("../src/Views/filial/index.php");
    }

    public function create() {
        require_once("../src/Views/filial/criar.html");
    }

    public function edit(array $params) {
        $id = (int)$params[1];
        $filialDAO = new FilialDAO();
        $filial = $filialDAO->queryID($id);

        require_once("../src/Views/filial/editar.php");
    }

    public function update(array $params) {
        $id = (int)$params[1];
        $filial = new Filial($id, (string)$_POST["nome"], (string)$_POST["telefone"], (string)$_POST["cidade"], (string)$_POST["estado"]);
        $filialDAO = new FilialDAO();

        if (!$filialDAO->update($filial)) {
            echo "Erro ao alterar";
        } else {
            header("location: /filial");
        }
    }

    public function destroy(array $params) {
        $id = (int)$params[1];
        $filialDAO = new FilialDAO();

        if (!$filialDAO->delete($id)) {
            echo "Erro ao deletar";
        } else {
            header("location: /filial");
        }
    }
}
