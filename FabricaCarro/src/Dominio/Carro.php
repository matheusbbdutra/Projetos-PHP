<?php

namespace Fabrica\Carro;

class Carro
{
    protected string $modelo;
    protected string $tipoCombustivel;
    protected string $tipoCambio;
    protected string $cor;
    protected string $motor;
    protected float $valor;


    public function getValor(): float
    {
        return $this->valor;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getTipoCombustivel(): string
    {
        return $this->tipoCombustivel;
    }

    public function getTipoCambio(): string
    {
        return $this->tipoCambio;
    }

    public function getCor(): string
    {
        return $this->cor;
    }

    public function getMotor(): string
    {
        return $this->motor;
    }


}