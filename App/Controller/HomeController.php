<?php

namespace App\Controller;

final class HomeController extends Controller
{
    public static function index() : void
    {
        parent::isProtected();       

        include VIEWS . '/Home/Home.php';
    }
}