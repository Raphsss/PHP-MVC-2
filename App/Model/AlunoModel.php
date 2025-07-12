<?php

namespace App\Model;

use App\DAO\AlunoDAO;

final class AlunoModel extends Model
{
    public $Id, $Nome, $RA, $Curso;

    final public function save()
    {
        $dao = new AlunoDAO();

        if($this->Id)
        {
            $dao->update($this);
            return;
        }

        $dao->insert($this);
    }

    function getById(int $id) : ?AlunoModel
    {
        return new AlunoDAO()->selectById($id);
    }

    function getAllRows() : array
    {
        $this->rows = new AlunoDAO()->select();

        return $this->rows;
    }

    function delete(int $id) : bool
    {
        return (new AlunoDAO())->delete($id);
    }
}