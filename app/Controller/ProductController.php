<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\GerenciadorDeLojas\LojasDAO;
use App\DAO\GerenciadorDeLojas\ProdutosDAO;

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

 
        return $response;
    }
    public function updateProduto(Request $request, Response $response, array $args): Response{

 
        return $response;
    }
    public function deleteProduto(Request $request, Response $response, array $args): Response{

 
        return $response;  
    }
}