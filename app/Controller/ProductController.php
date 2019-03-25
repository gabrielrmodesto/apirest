<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\GerenciadorDeLojas\LojasDAO;
use App\DAO\GerenciadorDeLojas\ProdutosDAO;
use App\Models\ProdutosModel;

final class ProductController{
    public function getProdutos(Request $request, Response $response, array $args): Response{
        $queryParams = $request->getParsedBody();

        $produtosDAO = new ProdutosDAO();
        $id = (int)$queryParams['loja_id'];
        $produtos = $produtosDAO->getAllProdutos($id);
        $response = $response->withJson($produtos);
        
        return $response;
    }
    public function insertProduto(Request $request, Response $response, array $args): Response{
        $data = $request->getParsedBody();

        $produtosDAO = new ProdutosDAO();
        $produtos = new ProdutosModel();
        $produtos->setLojaId($data['loja_id'])
                 ->setNome($data['nome'])
                 ->setPreco($data['preco'])
                 ->setQuantidade($data['quantidade']);
        $produtosDAO->insertProdutos($produtos);
        $response = $response->withJson([
                                            "message" => "Inserido no banco"
                                        ]);
        return $response;
    }
    public function updateProduto(Request $request, Response $response, array $args): Response{

 
        return $response;
    }
    public function deleteProduto(Request $request, Response $response, array $args): Response{

 
        return $response;  
    }
}