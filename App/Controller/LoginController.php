<?php

namespace App\Controller;

use App\Model\LoginModel;

final class LoginController
{
    public static function index() : void
    {
        $erro = "";

        $model = new LoginModel();

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {            
            $model->Email = $_POST['email'];
            $model->Senha = $_POST['senha'];
            
            $model = $model->logar();

            if($model !== null)
            {
                $_SESSION['usuarioLogado'] = $model;

                if(isset($_POST['lembrar']))
                {
                    setcookie(
                        name: "sistema_biblioteca_usuario",
                        value : $model->Email,
                        expires_or_options: time()+60*60*24*30
                    );
                }

                header("Location: /");
            } else 
                $erro = "Email ou senha incorretos";      
        }

        if(isset($_COOKIE['sistema_biblioteca_usuario']))
            $model->Email = $_COOKIE['sistema_biblioteca_usuario'];

        include VIEWS . '/Login/FormLogin.php';
    }

    public static function logout() : void
    {
        session_destroy();
        header("Location: /login");
    }

    public static function getUsuario() : LoginModel
    {
        return unserialize(serialize($_SESSION['usuarioLogado']));
    }
}