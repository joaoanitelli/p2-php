<?php

namespace php\projeto\Models\Domain;

class Fornecedor {
    private int $id;
    private string $nome;
    private string $telefone;
    private string $cidade;
    private string $estado;

    public function __construct(int $id,string $nome, string $telefone,string $cidade,string $estado) {
        $this->setId($id);
        $this->setNome($nome);
        $this->setTelefone($telefone);
        $this->setCidade($cidade);
        $this->setEstado($estado);
    }

    public function getId() : int {
        return $this->id;
    }

    public function setId(int $id):void {
        $this->id = $id;
    }

    public function getNome():string {
        return $this->nome;
    }

    public function setNome(string $nome):void {
        $this->nome = $nome;
    }

    public function getTelefone():string {
        return $this->telefone;
    }

    public function setTelefone(string $telefone):void {
        $this->telefone = $telefone;
    }

    public function getCidade():string {
        return $this->cidade;
    }

    public function setCidade(string $cidade):void {
        $this->cidade = $cidade;
    }
    public function getEstado():string {
        return $this->estado;
    }

    public function setEstado(string $estado):void {
        $this->estado = $estado;
    }

}