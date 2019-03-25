<?php

namespace App\Models;

final class ProdutosModel{
    private $id;
    private $loja_id;
    private $nome;
    private $preco;
    private $quantidade;

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
     * @param  mixed $id
     *
     * @return ProdutosModel
     */
    public function setId(int $id): ProdutosModel{
        $this->id = $id;
        return $this;
    }
    /**
     * getLojaId
     *
     * @return int
     */
    public function getLojaId(): int{
        return $this->loja_id;
    }
    /**
     * setLojaId
     *
     * @param  mixed $loja_id
     *
     * @return ProdutosModel
     */
    public function setLojaId(int $loja_id): ProdutosModel{
        $this->loja_id = $loja_id;
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
     * @param  mixed $nome
     *
     * @return ProdutosModel
     */
    public function setNome(string $nome): ProdutosModel{
        $this->nome = $nome;
        return $this;
    }
    /**
     * getPreco
     *
     * @return float
     */
    public function getPreco(): float{
        return $this->preco;
    }
    /**
     * setPreco
     *
     * @param  mixed $preco
     *
     * @return ProdutosModel
     */
    public function setPreco(float $preco): ProdutosModel{
        $this->preco = $preco;
        return $this;
    }
    /**
     * getQuantidade
     *
     * @return int
     */
    public function getQuantidade(): int{
        return $this->quantidade;
    }
    /**
     * setQuantidade
     *
     * @param  mixed $quantidade
     *
     * @return ProdutosModel
     */
    public function setQuantidade(int $quantidade): ProdutosModel{
        $this->quantidade = $quantidade;
        return $this;
    }
}