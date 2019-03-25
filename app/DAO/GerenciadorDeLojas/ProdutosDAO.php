<?php

namespace App\DAO\GerenciadorDeLojas;

use App\Models\ProdutosModel;


class ProdutosDAO extends Conexao{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * getAllProdutos
     *
     * @param  mixed $loja_id
     *
     * @return array
     */
    public function getAllProdutos(int $loja_id): array{
        $statement = $this->pdo->prepare('SELECT * FROM produtos where loja_id = :loja_id;');
        $statement->bindParam(':loja_id', $loja_id, \PDO::PARAM_INT);
        $statement->execute();
        $produtos = $statement->fetchAll(\PDO::FETCH_ASSOC);

        return $produtos;
    }
    
    public function insertProdutos(ProdutosModel $produtos): void{
        $statement = $this->pdo
                          ->prepare('INSERT INTO produtos VALUES (
                                        null,
                                        :loja_id,
                                        :nome,
                                        :preco,
                                        :quantidade
                                    );');
        $statement->execute([
                                'loja_id' => $produtos->getLojaId(),
                                'nome' => $produtos->getNome(),
                                'preco' => $produtos->getPreco(),
                                'quantidade' => $produtos->getQuantidade()
                            ]);
    }
}