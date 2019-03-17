<?php

namespace App\DAO\GerenciadorDeLojas;

abstract class Conexao{
    /**
    * @var \PDO
    */
    protected $pdo;

    public function __construct(){
        $host     = getenv('GERENCIADOR_DE_LOJAS_MYSQL_HOST');
        $user     = getenv('GERENCIADOR_DE_LOJAS_MYSQL_USER');
        $password = getenv('GERENCIADOR_DE_LOJAS_MYSQL_PASSWORD');
        $dbname   = getenv('GERENCIADOR_DE_LOJAS_MYSQL_DBNAME');
        $port     = getenv('GERENCIADOR_DE_LOJAS_MYSQL_PORT');

        $dsn = "mysql:host={$host};dbname={$dbname};port={$port}";

        $this->pdo = new \PDO($dsn,$user,$password);

        //Configurando exceptions
        $this->pdo->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );
    }
}
