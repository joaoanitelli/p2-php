<?php

namespace php\projeto\Controllers;

use php\projeto\Models\DAO\CarroDAO;
use php\projeto\Models\Domain\Carro;

class CarroController {
    public function store(){
        $carro = new Carro(0, $_POST["modelo"], (int)$_POST["ano"], (string)$_POST["cor"], (float)$_POST["valor"]);
        $carroDAO = new CarroDAO();

        if (!$carroDAO->create($carro)) {
            echo "Erro ao inserir";
        }

        header("location: /carro");
    }

    public function index(){
        $carroDAO = new CarroDAO();
        $listCarro = $carroDAO->query();

        require_once("../src/Views/carro/index.php");
    }

    public function create() {
        require_once("../src/Views/carro/criar.html");
    }

    public function edit(array $params) {
        $id = (int)$params[1];
        $carroDAO = new CarroDAO();
        $carro = $carroDAO->queryID($id);

        require_once("../src/Views/carro/editar.php");
    }

    public function update(array $params) {
        $id = (int)$params[1];
        $carro = new Carro($id, (string)$_POST["modelo"], (int)$_POST["ano"], (string)$_POST["cor"], (float)$_POST["valor"]);
        $carroDAO = new CarroDAO();

        if (!$carroDAO->update($carro)) {
            echo "Erro ao alterar";
        } else {
            header("location: /carro");
        }
    }

    public function destroy(array $params) {
        $id = (int)$params[1];
        $carroDAO = new CarroDAO();

        if (!$carroDAO->delete($id)) {
            echo "Erro ao deletar";
        } else {
            header("location: /carro");
        }
    }
}
