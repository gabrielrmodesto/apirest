<?php

namespace App\Models;

final class UsuarioModel{
    private $id;
    private $nome;
    private $email;
    private $senha;

    /**
     * getId
     *
     * @return int
     */
    public function getId(): int{
        return $this->id;
    }

    /**
     * setId
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self{
        $this->id = $id;
        return $this;
    }

    
    /**
     * getNome
     *
     * @return string
     */
    public function getNome(): string{
        return $this->nome;
    }

    /**
     * setNome
     *
     * @param  string $nome
     *
     * @return self
     */
    public function setNome(string $nome): self{
        $this->nome = $nome;
        return $this;
    }

    /**
     * getEmail
     *
     * @return string
     */
    public function getEmail(): string{
        return $this->email;
    }

    /**
     * setEmail
     *
     * @param  string $email
     *
     * @return self
     */
    public function setEmail(string $email): self{
        $this->email = $email;
        return $this;
    }

    /**
     * getSenha
     *
     * @return string
     */
    public function getSenha(): string{
        return $this->senha;
    }

    /**
     * setSenha
     *
     * @param string $senha
     *
     * @return self
     */
    public function setSenha($senha): self{
        $this->senha = $senha;
        return $this;
    }
}