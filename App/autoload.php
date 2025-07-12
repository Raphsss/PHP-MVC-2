<?php

spl_autoload_register(function ($class) {

    // Define o caminho para o arquivo da classe
	$file = BASE_DIR . "/" . $class . ".php";

    if(!file_exists($file))
    {
        // Interrompe o codigo e joga uma messagem de erro 
        throw new Exception("Arquivo não encontrado:<br/>" . $file);
        return;
    }

    include $file;
});