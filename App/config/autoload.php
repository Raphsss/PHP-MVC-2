<?php 

spl_autoload_register(function ($class){

    $file = BASE_DIR . '/' . str_replace('\\', '/', $class) . '.php';

    if(file_exists($file))
    {
        include $file;
    }else{
        exit('Arquivo não encontrado. Arquivo: ' . $file . "<br />");
    }   
});
