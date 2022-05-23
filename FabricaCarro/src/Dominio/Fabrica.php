<?php

namespace Fabrica;

class Fabrica extends carro
{
    protected $carro;
    protected string $marca;
    protected float $valor;

    public function __construct(Carro $carro, string $marca, float $valor)
    {
        $this->carro = $carro;
        $this->marca = $marca;
        $this->valor = $valor;
    }
    
    public function getCarro(): Carro
    {
        return $this->carro;
    }

    
    public function getMarca(): string
    {
        return $this->marca;
    }

    
    public function getValor(): float
    {
        return $this->valor;
    }

}
