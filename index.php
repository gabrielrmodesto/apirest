<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require_once 'vendor/autoload.php';

$app = new \Slim\App();


$app->get("/[{nome}]", function(Request $request, Response $response, array $args) {
    $limit = $request->getQueryParams()['limit'] ?? 10;
    $nome = $args['nome'] ?? 'mouse';

    return $response->getBody()->write("{$limit} Produtos listados no BD com o nome {$nome}");
});

// $app->get('/',function($request, $response, $args){
//     return $response->getBody()->write('Hello World');
// });

$app->run();
