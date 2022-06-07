<?php

namespace Fabrica;

use Fabrica\Carro\Carro;
use Fabrica\Fabrica;


class Pessoa
{
    protected string $nome;
    protected string $salario;
    protected Carro $carro;


    public function __construct(string $nome,string $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getSalario(): string
    {
        return $this->salario;
    }


    public function setSalario(string $salario)
    {
        $this->salario = $salario;
        return $this;
    }


    public function setCarro($modelo)
    {
        $this->carro = $modelo;
    }

}