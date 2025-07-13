<?php

namespace App\Controller;

use App\Model\AlunoModel;

use Exception;

final class AlunoController extends Controller
{
    public static function index()
    {
        parent::isProtected();

        $model = new AlunoModel();
        
        try 
        {
            $model->getAllRows();
        } catch(Exception $e) 
        {
            $model->setError("Ocorreu um erro ao buscar os alunos:");
            $model->setError($e->getMessage());
        }

        parent::renderView('Aluno/ListaAluno.php', $model); 
    }

    public static function form() : void
    {
        parent::isProtected();

        $model = new AlunoModel();

        try 
        {
            if (parent::isPost()) 
            {
                $model->Id = !empty($_POST['id']) ? $_POST['id'] : null;
                $model->Nome = $_POST['nome'];
                $model->RA = $_POST['ra'];
                $model->Curso = $_POST['curso'];
                $model->save();

                parent::redirect('/aluno');
            } else
            {
                if(isset($_GET['id']))
                {              
                    $model = $model->getById( (int) $_GET['id'] );
                }
            }
        } catch (Exception $e) 
        {
            $model->setError($e->getMessage());
        }

        parent::renderView('Aluno/FormAluno.php', $model);
    }

    public static function delete()
    {
        parent::isProtected();
        
        $model = new AlunoModel();
        
        try 
        {
            $model->delete( (int) $_GET['id']);
            parent::redirect("/aluno");

        } catch(Exception $e) 
        {
            $model->setError("Ocorreu um erro ao excluir o aluno:");
            $model->setError($e->getMessage());
        } 
        
        parent::renderView('Aluno/ListaAluno.php', $model);
    }
}
