<?php

namespace App\Model;

use App\DAO\LoginDAO;

final class LoginModel extends Model
{
    public $Id, $Email, $Senha, $Nome;

    public function logar(): ?LoginModel
    {
        return new LoginDAO()->autenticar($this);
    }
}
