<?php

// Caminhos de diretorio
define('BASE_DIR', dirname(__FILE__, 2));
define('VIEWS', BASE_DIR . '/View');

// Dados de conexão com o banco
$_ENV['db']['host'] = 'localhost';
$_ENV['db']['name'] = 'db_mvc_2';
$_ENV['db']['user'] = 'root';
$_ENV['db']['password'] = '';
