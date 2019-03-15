<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class ProductController{
    public function getProducts(Request $request, Response $response, array $args): Response{
        //$response->getBody()->write("Hello world");
        $response = $response->withJson([
            "message" => "Hello world",
        ]);
        return $response;
    }
}