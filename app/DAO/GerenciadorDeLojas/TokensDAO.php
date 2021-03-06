<?php

namespace App\DAO\GerenciadorDeLojas;
use App\Models\TokenModel;

class TokensDAO extends Conexao{
    public function __construct()
    {
        parent::__construct();
    }
    public function createToken(TokenModel $token){
        $statement = $this->pdo->prepare( 'INSERT INTO tokens 
                        (
                            token,
                            refresh_token,
                            expired_at,
                            usuarios_id
                        ) VALUES
                        (
                            :token,
                            :refresh_token,
                            :expired_at,
                            :usuarios_id
                        )');
        $statement->execute([
                            'token' => $token->getToken(),
                            'refresh_token' => $token->getRefreshToken(),
                            'expired_at' => $token->getExpiredAt(),
                            'usuarios_id' => $token->getUsuariosId()
                            ]);
    }
}