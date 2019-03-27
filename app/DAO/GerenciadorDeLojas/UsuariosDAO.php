<?php

namespace App\DAO\GerenciadorDeLojas;

use App\Models\UsuarioModel;


class UsuariosDAO extends Conexao{
    public function __construct(){
        parent::__construct();   
    }
    public function getUserByEmail(string $email): ?UsuarioModel{
        $statement = $this->pdo
                          ->prepare('SELECT * FROM usuarios where email= :email');
        $statement->bindParam('email', $email);
        $statement->execute();
        $usuarios = $statement->fetchAll(\PDO::FETCH_ASSOC);
        
        if($usuarios->rowCount() > 0){
            $usuario = new UsuarioModel();
            $usuario->setId($usuario[0]['id'])
                    ->setNome($usuario[0]['nome'])
                    ->setEmail($usuario[0]['email'])
                    ->setSenha($usuario[0]['senha']);
            return $usuario;
        }
        
        return null;
    }
}