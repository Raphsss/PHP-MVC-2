<?php

namespace App\DAO;

use App\Model\AlunoModel;

use \PDO;
use PDOException;

final class AlunoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(AlunoModel $model)
    {
        $sql = "INSERT INTO Aluno VALUES (?, ?, ?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->RA);
        $stmt->bindValue(3, $model->curso);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'falha ao executar o insert ' . $e->getMessage();
        }
    }

    public function update(AlunoModel $model) 
    {
        
    }
}
