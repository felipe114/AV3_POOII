<?php

namespace D\xampp2\htdocs\AV3_POO;

class Produto{
    private ?int $idProduto;
    private string $nome_produto;
    private float $preco_produto;

    public function __construct(?int $idProduto, string $nome_produto, float $preco_produto)
    {
        $this->idProduto = $idProduto;
        $this->nome_produto = $nome_produto;
        $this->preco_produto = $preco_produto;
    }

    public function getIdProduto(): ?int
    {
        return $this->idProduto;
    }
    public function getProduto(): string
    {
        return $this->nome_produto;
    }
    public function getPreco(): float
    {
        return $this->preco_produto;
    }

    public function setIdProduto(int $id): void
    {
        $this->idProduto = $id;
    }
    public function setProduto(string $nome): void
    {
        $this->nome_produto = $nome;
    }
    public function setPreco(float $preco): void
    {
        $this->preco_produto = $preco;
    }
}