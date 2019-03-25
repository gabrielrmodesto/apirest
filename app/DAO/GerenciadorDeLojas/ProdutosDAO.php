<?php

namespace App\DAO\GerenciadorDeLojas;

class ProdutosDAO extends Conexao{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProdutos(int $loja_id): array{
        $stament = $this->pdo->prepare('SELECT * FROM produtos where loja_id = :loja_id;');
        $stament->bindParam(':loja_id', $loja_id, \PDO::PARAM_INT);
        $stament->execute();
        $produtos = $stament->fetchAll(\PDO::FETCH_ASSOC);

        return $produtos;
    }
}