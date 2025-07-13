<?php

use App\Controller\{
    AlunoController,
    HomeController,
    LoginController
};

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) 
{
    // Ponto de entrada 
    case '/':
        HomeController::index();
        break;

    // Rotas de login/logout
    case '/login':
        LoginController::index();
    break;

    case '/logout':
        LoginController::logout();
    break;


    // Rotas Aluno
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
