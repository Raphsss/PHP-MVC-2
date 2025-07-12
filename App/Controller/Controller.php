<?php

namespace App\Controller;

abstract class Controller
{
    final protected static function renderView($view, $model = null) : void
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
}