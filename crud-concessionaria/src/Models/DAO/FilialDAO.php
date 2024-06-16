<?php

namespace php\projeto\Models\DAO;

use Exception;
use PDO;
use php\projeto\Models\Domain\Filial;

class FilialDAO {
    private DAO $dao;

    public function __construct() {
        $this->dao = new DAO();
    }

    public function create(Filial $filial) {
        try {
            $sql = "
                INSERT INTO filial 
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
            $p->bindValue(":nome", $filial->getNome());
            $p->bindValue(":telefone", $filial->getTelefone());
            $p->bindValue(":cidade", $filial->getCidade());
            $p->bindValue(":estado", $filial->getEstado());
            return $p->execute();
        } catch (Exception $e) {
            throw new Exception("Erro ao criar filial: " . $e->getMessage());
        }
    }
    
    public function delete($id) {
        try {
            $sql = "DELETE FROM filial WHERE id = :id";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch (Exception $e) {
            throw new Exception("Erro ao deletar filial: " . $e->getMessage());
        }
    }
    
    public function update(Filial $filial) {
        try {
            $sql = "
                UPDATE filial 
                SET 
                    nome = :nome,
                    telefone = :telefone,
                    cidade = :cidade,
                    estado = :estado
                WHERE 
                    id = :id
            ";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":nome", $filial->getNome());
            $p->bindValue(":telefone", $filial->getTelefone());
            $p->bindValue(":cidade", $filial->getCidade());
            $p->bindValue(":estado", $filial->getEstado());
            $p->bindValue(":id", $filial->getId());
            return $p->execute();
        } catch (Exception $e) {
            throw new Exception("Erro ao atualizar filial: " . $e->getMessage());
        }
    }    

    public function query() {
        $sql = "SELECT * FROM filial";
        $stm = $this->dao->getConexao()->query($sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function queryId(int $id) {
        try {
            $sql = "SELECT * FROM filial WHERE id = :id";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception("Erro ao consultar filial: " . $e->getMessage());
        }
    }
}
