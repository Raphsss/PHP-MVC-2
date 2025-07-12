<?php

namespace App\Controller;

use App\Model\Model;

abstract class Controller
{
    final protected static function renderView(string $view, ?Model $model) : void
    {
        $arquivoView = VIEWS . "/$view";

        if(file_exists($arquivoView))
            include $arquivoView;
        else
            exit('Arquivo da View não encontrado. <br/>' . $arquivoView);
    }    

    final protected static function isPost() : bool
    {
        return $_SERVER['REQUEST_METHOD'] == "POST";
    }

    final protected static function redirect(string $route) : void
    {
        header("Location: $route");
    }
}