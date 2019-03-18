<?php

namespace App\DAO\GerenciadorDeLojas;

class LojasDAO extends Conexao{
    public function __construct()
    {
        parent::__construct();   
    }
    public function getAllLojas(): array{
        $lojas = $this->pdo->query('SELECT * FROM lojas')
                           ->fetchAll(\PDO::FETCH_ASSOC);
        return $lojas;
    }
}