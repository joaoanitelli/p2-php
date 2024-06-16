<?php

namespace php\projeto\Models\DAO;

use Exception;
use PDO;
use php\projeto\Models\Domain\Fornecedor;

class FornecedorDAO{
    private DAO $dao;

    public function __construct() {
        $this->dao = new DAO();
    }

    public function create(Fornecedor $fornecedor){
        try {
            $sql = "
                INSERT INTO fornecedor 
                (
                    nome,
                    telefone,
                    cidade,
                    estado
                ) 
                VALUES (
                    :nome,
                    :telefone,
                    :cidade,
                    :estado
                )
            ";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":nome",$fornecedor->getNome());
            $p->bindValue(":telefone",$fornecedor->getTelefone());
            $p->bindValue(":cidade",$fornecedor->getCidade());
            $p->bindValue(":estado",$fornecedor->getEstado());
            return $p->execute();
        } catch (Exception $e) {
            return 0;
        }
    }

    public function delete($id){
        try {
            $sql = "DELETE FROM fornecedor WHERE id = :id";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch (Exception $e) {
            return 0;
        }
    }

    public function update(Fornecedor $fornecedor){
        try {
            $sql = "
                UPDATE fornecedor 
                SET 
                    nome = :nome,
                    telefone = :telefone,
                    cidade = :cidade,
                    estado = :estado
                WHERE 
                    id = :id
            ";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":nome", $fornecedor->getNome());
            $p->bindValue(":telefone", $fornecedor->getTelefone());
            $p->bindValue(":cidade", $fornecedor->getCidade());
            $p->bindValue(":estado", $fornecedor->getEstado());
            $p->bindValue(":id", $fornecedor->getId());
            return $p->execute();
        } catch (Exception $e) {
            return 0;
        }
    }    

    public function query(){
        $sql = "SELECT * FROM fornecedor";
        $stm = $this->dao->getConexao()->query($sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function queryId(int $id){
        $sql = "SELECT * FROM fornecedor WHERE id = $id";
        $stm = $this->dao->getConexao()->query($sql);
        return $stm->fetch(PDO::FETCH_ASSOC);
    }
}