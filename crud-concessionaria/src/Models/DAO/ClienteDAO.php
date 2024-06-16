<?php

namespace php\projeto\Models\DAO;

use Exception;
use PDO;
use php\projeto\Models\Domain\Cliente;

class ClienteDAO{
    private DAO $dao;

    public function __construct() {
        $this->dao = new DAO();
    }

    public function create(Cliente $cliente){
        try {
            $sql = "
                INSERT INTO cliente 
                (
                    nome,
                    cpf,
                    cidade,
                    estado
                ) 
                VALUES (
                    :nome,
                    :cpf,
                    :cidade,
                    :estado
                )
            ";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":nome",$cliente->getNome());
            $p->bindValue(":cpf",$cliente->getCpf());
            $p->bindValue(":cidade",$cliente->getCidade());
            $p->bindValue(":estado",$cliente->getEstado());
            return $p->execute();
        } catch (Exception $e) {
            return 0;
        }
    }

    public function update(Cliente $cliente){
        try {
            $sql = "
                UPDATE cliente
                SET
                    nome = :nome,
                    cpf = :cpf,
                    cidade = :cidade,
                    estado = :estado
                WHERE id = :id
            ";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":id", $cliente->getId());
            $p->bindValue(":nome", $cliente->getNome());
            $p->bindValue(":cpf", $cliente->getCpf());
            $p->bindValue(":cidade", $cliente->getCidade());
            $p->bindValue(":estado", $cliente->getEstado());
            return $p->execute();
        } catch (Exception $e) {
            return 0;
        }
    }
    
    public function delete($id){
        try {
            $sql = "DELETE FROM cliente WHERE id = :id";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch (Exception $e) {
            return 0;
        }
    }

    public function query(){
        $sql = "SELECT * FROM cliente";
        $stm = $this->dao->getConexao()->query($sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function queryId(int $id){
        $sql = "SELECT * FROM cliente WHERE id = $id";
        $stm = $this->dao->getConexao()->query($sql);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }
}