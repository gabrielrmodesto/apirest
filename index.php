<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require_once 'vendor/autoload.php';

$app = new \Slim\App();

$app->post('/', function(Request $request, Response $response, array $args){
    $data = $request->getParsedBody();
    $nome = $data['nome'] ?? '';
    return $response->getBody()->write("Produto {$nome} (POST)");
    
});
$app->put('/', function(Request $request, Response $response, array $args){ 
    $data = $request->getParsedBody();
    $nome = $data['nome'] ?? '';
    return $response->getBody()->write("Produto {$nome} (PUT)");
});

$app->delete('/', function(Request $request, Response $response, array $args){
    $data = $request->getParsedBody();
    $nome = $data['nome'] ?? '';
    return $response->getBody()->write("Produto {$nome} (DELETE)");
    
});

$app->run();
    