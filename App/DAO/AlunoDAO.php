<?php

namespace App\DAO;

use App\Model\AlunoModel;

use PDOException;

final class AlunoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(AlunoModel $model) 
    {
        $sql = "INSERT INTO Aluno (Nome, RA, Curso) VALUES (?, ?, ?)";

        $stmt = parent::$conn->prepare($sql);

        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->RA);
        $stmt->bindValue(3, $model->Curso);

        try {
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'falha ao executar o insert ' . $e->getMessage();
        }
    }

    public function update(AlunoModel $model) : AlunoModel
    {
        $sql = "UPDATE Aluno SET Nome=?, RA=?, Curso=? WHERE Id=? ";

        $stmt = parent::$conn->prepare($sql);
        $stmt->bindValue(1, $model->Nome);
        $stmt->bindValue(2, $model->RA);
        $stmt->bindValue(3, $model->Curso);
        $stmt->bindValue(4, $model->Id);
        $stmt->execute();
        
        return $model;
    }

    public function delete(int $id) : bool
    {
        $sql = "DELETE FROM Aluno WHERE Id=? ";

        $stmt = parent::$conn->prepare($sql);  
        $stmt->bindValue(1, $id);

        return $stmt->execute();
    }

    public function select() : array
    {
        $sql = "SELECT * FROM Aluno";

        $stmt = parent::$conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(DAO::FETCH_CLASS, "App\Model\AlunoModel");
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM Aluno WHERE Id=? ";

        $stmt = parent::$conn->prepare($sql);  
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\AlunoModel");
    }
}
