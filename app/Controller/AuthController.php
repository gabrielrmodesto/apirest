<?php

namespace App\Controller;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\GerenciadorDeLojas\UsuariosDAO;
use Firebase\JWT\JWT;

final class AuthController{
    public function login(Request $request, Response $response, array $args): Response{
        $data = $request->getParsedBody();

        $email = $data['email']; 
        $senha = $data['senha'];
        $expired_date = $data['expired_date'];

        $usuarioDAO = new UsuariosDAO();
        $usuario = $usuarioDAO->getUserByEmail($email);

        if(is_null($usuario))
            return $response->withStatus(401);

        if(password_verify($senha, $usuario->getSenha()))
            return $response->withStatus(401);

        $tokenPayLoad = [
            'sub' => $usuario->getId(),
            'name' => $usuario->getNome(),
            'email' => $usuario->getEmail(),
            'experied_date' => $expired_date
        ];

        $token = JWT::encode($tokenPayLoad, getenv('JWT_SECRET_KEY'));
        $refreshTokenPayload = [
            'email' => $usuario->getEmail()
        ];
        $refreshToken = JWT::encode($refreshTokenPayload, getenv('JWT_SECRET_KEY'));
        var_dump($token);
        return $response;
    }
}