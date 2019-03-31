<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\GerenciadorDeLojas\UsuariosDAO;

final class AuthController{
    public function login(Request $request, Response $response, array $args): Response{
        $data = $request->getParsedBody();

        $email = $data['email']; 
        $senha = $data['senha'];
        $usuarioDAO = new UsuariosDAO();
        $usuario = $usuarioDAO->getUserByEmail($email);

        if(is_null($usuario))
            return $response->withStatus(401);

        if(password_verify($senha, $usuario->getSenha()))
            return $response->withStatus(401);

        var_dump($usuario);

        return $response;
    }
}