<?php

namespace App\Model;

use App\DAO\AlunoDAO;

final class AlunoModel extends Model
{
    public $Id, $Nome, $RA, $Curso;

    final public function save()
    {
        $dao = new AlunoDAO();

        if($this->id)
        {
            $dao->update($this);
            return;
        }

        $dao->insert($this);
    }
}