<?php

namespace php\projeto\Models\Domain;

class Cliente {
    private int $id;
    private string $nome;
    private int $cpf;
    private string $cidade;
    private string $estado;

    public function __construct(int $id,string $nome, int $cpf,string $cidade,string $estado) {
        $this->setId($id);
        $this->setNome($nome);
        $this->setCpf($cpf);
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

    public function getCpf():int {
        return $this->cpf;
    }

    public function setCpf(int $cpf):void {
        $this->cpf = $cpf;
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