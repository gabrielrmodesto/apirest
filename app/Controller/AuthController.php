<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\GerenciadorDeLojas\UsuariosDAO;

final class AuthController{
    public function login(Request $request, Response $response, array $args){
        $data = $request->getParsedBody();

        $email = $data['email'];
        $usuarioDAO = new UsuariosDAO();
        $usuario = $usuarioDAO->getUserByEmail($email);
        var_dump($usuario);

        return $response;
    }
}