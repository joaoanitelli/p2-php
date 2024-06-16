<?php

namespace php\projeto\Models\DAO;

use Exception;
use PDO;
use php\projeto\Models\Domain\Carro;

class CarroDAO {
    private DAO $dao;

    public function __construct() {
        $this->dao = new DAO();
    }

    public function create(Carro $carro) {
        try {
            $sql = "
                INSERT INTO carro 
                (
                    modelo,
                    ano,
                    cor,
                    valor
                ) 
                VALUES (
                    :modelo,
                    :ano,
                    :cor,
                    :valor
                )
            ";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":modelo", $carro->getModelo());
            $p->bindValue(":ano", $carro->getAno());
            $p->bindValue(":cor", $carro->getCor());
            $p->bindValue(":valor", $carro->getValor());
            return $p->execute();
        } catch (Exception $e) {
            throw new Exception("Erro ao criar carro: " . $e->getMessage());
        }
    }
    
    public function delete($id) {
        try {
            $sql = "DELETE FROM carro WHERE id = :id";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch (Exception $e) {
            throw new Exception("Erro ao deletar carro: " . $e->getMessage());
        }
    }
    
    public function update(Carro $carro) {
        try {
            $sql = "
                UPDATE carro 
                SET 
                    modelo = :modelo,
                    ano = :ano,
                    cor = :cor,
                    valor = :valor
                WHERE 
                    id = :id
            ";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":modelo", $carro->getModelo());
            $p->bindValue(":ano", $carro->getAno());
            $p->bindValue(":cor", $carro->getCor());
            $p->bindValue(":valor", $carro->getValor());
            $p->bindValue(":id", $carro->getId());
            return $p->execute();
        } catch (Exception $e) {
            throw new Exception("Erro ao atualizar carro: " . $e->getMessage());
        }
    }    

    public function query() {
        $sql = "SELECT * FROM carro";
        $stm = $this->dao->getConexao()->query($sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function queryId(int $id) {
        try {
            $sql = "SELECT * FROM carro WHERE id = :id";
            $p = $this->dao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception("Erro ao consultar carro: " . $e->getMessage());
        }
    }
}
