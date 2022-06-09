<?php

namespace Feirao\Pessoa;

use Feirao\ModeloCarro\Carro;

class Pessoa
{
    private string $nome;
    private float $saldo;
    private Carro $carro;


    public function getCarro(): Carro
    {
        return $this->carro;
    }


    public function __construct(string $nome,float $saldo)
    {
        $this->nome = $nome;
        $this->saldo = $saldo;
    }

    public function getSalario(): float
    {
        return $this->saldo;
    }

    public function sacar(float $valorASacara)
    {
        $this->saldo -= $valorASacara;
    }

    public function setSalario(float $saldo)
    {
        $this->saldo = $saldo;
        return $this;
    }


    public function setCarro($modelo)
    {
        $this->carro = $modelo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
}