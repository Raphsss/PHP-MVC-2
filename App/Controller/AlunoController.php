<?php

namespace App\Controller;

use App\Model\AlunoModel;

use Exception;

final class AlunoController extends Controller
{
    final public static function form()
    {

        $model = new AlunoModel();

        try 
        {
            if (parent::isPost()) 
            {
                $model->Id = !empty($_POST['id']) ? $_POST['id'] : null;
                $model->Nome = $_POST['nome'];
                $model->RA = $_POST['ra'];
                $model->Curso = $_POST['curso'];
            }
        } catch (Exception $e) 
        {
            $model->setError($e->getMessage());
        }

        parent::renderView('Aluno/FormAluno.php', $model);
    }
}
