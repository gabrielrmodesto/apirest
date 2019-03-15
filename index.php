<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require_once 'vendor/autoload.php';

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$configuration = new \Slim\Container($configuration);

//middleware
$mid01 = function(Request $request, Response $response, $next): Response{
    $response->getBody()->write("Middleware 1<br>");
    $response = $next($request, $response);
    $response->getBody()->write("<br>Middleware 2");

    return $response;
};

$app = new \Slim\App($configuration);

$app->post('/', function(Request $request, Response $response, array $args): Response{
    $data = $request->getParsedBody();
    $nome = $data['nome'] ?? '';
    $response->getBody()->write("Produto {$nome} (POST)");
    return $response;
})->add($mid01);

$app->run();
    