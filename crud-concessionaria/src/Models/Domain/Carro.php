<?php

namespace php\projeto\Models\Domain;

class Carro {
    private int $id;
    private string $modelo;
    private int $ano;
    private string $cor;
    private float $valor;

    public function __construct(int $id,string $modelo, int $ano,string $cor, float $valor) {
        $this->setId($id);
        $this->setModelo($modelo);
        $this->setAno($ano);
        $this->setCor($cor);
        $this->setValor($valor);
    }

    public function getId() : int {
        return $this->id;
    }

    public function setId(int $id):void {
        $this->id = $id;
    }

    public function getModelo():string {
        return $this->modelo;
    }

    public function setModelo(string $modelo):void {
        $this->modelo = $modelo;
    }

    public function getAno():int {
        return $this->ano;
    }

    public function setAno(int $ano):void {
        $this->ano = $ano;
    }

    public function getCor():string {
        return $this->cor;
    }

    public function setCor(string $cor):void {
        $this->cor = $cor;
    }

    public function getValor():int {
        return $this->valor;
    }

    public function setValor(float $valor):void {
        $this->valor = $valor;
    }

}