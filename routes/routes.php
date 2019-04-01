<?php

use function src\slimConfiguration;
use App\Controller\ProductController;
use App\Controller\LojaController;
use function src\basicAuth;
use App\Controller\AuthController;
use Tuupola\Middleware\JwtAuthentication;
use function src\jwtAuth;
use App\Middleware\JwtDateTimeMiddleware;

$app = new \Slim\App(slimConfiguration());

$app->post('/login', AuthController::class.':login');

$app->get('/teste', function() { echo "oi";})
    ->add(new JwtDateTimeMiddleware())())
    ->add(jwtAuth()); 

//agroupar rotas
$app->group('', function() use ($app){
    //rotas para o crud do projeto
    //4 rotas para a loja, criar, ler, alterar e deletar loja
    $app->get('/loja', LojaController::class . ':getLojas'); //le a loja
    $app->post('/loja', LojaController::class . ':insertLoja'); //cria a loja
    $app->put('/loja', LojaController::class . ':updateLoja'); //altera a loja
    $app->delete('/loja', LojaController::class . ':deleteLoja'); //deleta a loja

    //4 rotas para a produto, criar, ler, alterar e deletar produto
    $app->get('/produto', ProductController::class . ':getProdutos'); //le a produto
    $app->post('/produto', ProductController::class . ':insertProduto'); //cria a produto
    $app->put('/produto', ProductController::class . ':updateProduto'); //altera a produto
    $app->delete('/produto', ProductController::class . ':deleteProduto'); //deleta a produto
});
$app->run();