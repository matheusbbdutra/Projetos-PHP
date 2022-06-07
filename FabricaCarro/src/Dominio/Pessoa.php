<?php

namespace Fabrica;

use Fabrica\Carro\Carro;


class Pessoa
{
    private string $nome;


    private float $salario;
    private Carro $carro;


    public function getCarro(): Carro
    {
        return $this->carro;
    }


    public function __construct(string $nome,float $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function sacar(float $valorASacara)
    {
        $this->salario -= $valorASacara;
    }

    public function setSalario(float $salario)
    {
        $this->salario = $salario;
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