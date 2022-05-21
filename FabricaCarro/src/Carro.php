<?php

namespace Fabrica;

class Carro
{
    protected string $modelo;
    protected string $tipoCobustivel;
    protected string $tipoCambio;
    protected string $cor;
    protected float $potenciaMotor;

    public function __construct(
       string $modelo,
       string $tipoCobustivel,
       string $tipoCambio,
       string $cor,
       float $potenciaMotor
    ) {
        $this->modelo = $modelo;
        $this->tipoCobustivel = $tipoCobustivel;
        $this->tipoCambio = $tipoCambio;
        $this->cor = $cor;
        $this->potenciaMotor = $potenciaMotor;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getNomeCarro(): string
    {
        return $this->nomeCarro;
    }

    public function getTipoCobustivel(): string
    {
        return $this->tipoCobustivel;
    }

    public function getTipoCambio(): string
    {
        return $this->tipoCambio;
    }

    public function getCor(): string
    {
        return $this->cor;
    }

    public function getPotenciaMotor(): float
    {
        return $this->potenciaMotor;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

}