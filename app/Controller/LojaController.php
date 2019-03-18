<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\GerenciadorDeLojas\LojasDAO;
use App\Models\LojaModel;

final class LojaController{
    public function getLojas(Request $request, Response $response, array $args): Response{
        $lojasDAO = new LojasDAO();
        $lojas = $lojasDAO->getAllLojas();
        $response = $response->withJson($lojas);
        return $response;
    }
    public function insertLoja(Request $request, Response $response, array $args): Response{
        $lojaDAO = new LojasDAO();
        $loja = new LojaModel();
        $loja->setNome('');
        $loja->setTelefone('');
        $loja->setEndereco('');
        return $response;
    }
    public function updateLoja(Request $request, Response $response, array $args): Response{

        return $response;
    }
    public function deleteLoja(Request $request, Response $response, array $args): Response{

        return $response;    
    }
}