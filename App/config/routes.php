<?php

use App\Controller\AlunoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) 
{
    case '/':
        echo 'Pagina inicial';
        break;

    case '/aluno':
        AlunoController::index();
        break;

    case '/aluno/form':
        AlunoController::form();
        break;

    case '/aluno/delete':
        AlunoController::delete();
        break;
}
