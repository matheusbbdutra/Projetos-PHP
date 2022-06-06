<?php

namespace Fabrica;

use Fabrica\Carros\Carro;

class Pessoa
{
    protected string $nome;
    protected string $salario;
    protected array $carro;


    public function __construct(string $nome,string $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->carro = [];
    }

    public function getSalario(): string
    {
        return $this->salario;
    }


    public function setSalario(string $salario): Pessoa
    {
        $this->salario = $salario;
        return $this;
    }


    public function compraCarro($carro)
    {
        $this->carro = $carro;
    }



    public function getNome(): string
    {
        return $this->nome;
    }


}