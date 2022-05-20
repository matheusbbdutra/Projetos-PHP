<?php

namespace Fabrica;

require_once 'Carro.php';

class Fabrica extends Carro
{
    protected string $marca;
    protected float $valor;

    public function __construct(Carro $carro,string $marca, float $valor)
    {
        parent::__construct() = $carro;
        $this->marca = $marca;
        $this->valor = $valor;
    }


}