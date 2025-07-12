<?php

namespace App\DAO;

use \PDO;

use PDOException;

abstract class DAO extends PDO
{
    protected static $conn = null;

    public function __construct()
    {
        $this->connectDatabase();
    }

    private function connectDatabase()
    {
        $dsn = "mysql:host={$_ENV['db']['host']}; dbname={$_ENV['db']['name']}";

        try {
            if (self::$conn == null) {

                self::$conn = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['password']);

                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (PDOException $e) {
            echo 'falha ao conectar no banco: ' . $e->getMessage();
        }
    }
}
