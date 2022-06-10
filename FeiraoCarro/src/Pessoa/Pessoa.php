<?php

namespace Feirao\Pessoa;

use Feirao\Conta\Conta;
use Feirao\ModeloCarro\Carro;

class Pessoa
{
    private string $cpfCnpj;
    private string $nome;
    private Conta $conta;


    private Carro $carro;


    public function __construct(string $cpfCnpj, string $nome)
    {
        $this->cpfCnpj = $cpfCnpj;
        $this->nome = $nome;
    }

    public function setCarro($modelo)
    {
        $this->carro = $modelo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }


    public function getConta(): Conta
    {
        return $this->conta;
    }

    public function setConta(Conta $conta): Pessoa
    {
        $this->conta = $conta;
        return $this;
    }

}