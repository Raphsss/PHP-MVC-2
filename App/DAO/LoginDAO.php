<?php

namespace App\DAO;

use App\Model\LoginModel;

final class LoginDAO extends DAO
{   
    public function __construct()
    {
        parent::__construct();
    }
    
    public function autenticar(LoginModel $model) : ?LoginModel
    {
        $sql = "SELECT * FROM usuario WHERE email=? AND senha=? ";

        $stmt = parent::$conn->prepare($sql);  
        $stmt->bindValue(1, $model->Email);
        $stmt->bindValue(2, $model->Senha);
        $stmt->execute();

        $model = $stmt->fetchObject("App\Model\LoginModel");

        return is_object($model) ? $model : null;
    }
}