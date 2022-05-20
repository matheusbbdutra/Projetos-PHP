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

    /**
     * @return string
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * @return string
     */
    public function getNomeCarro(): string
    {
        return $this->nomeCarro;
    }

    /**
     * @return string
     */
    public function getTipoCobustivel(): string
    {
        return $this->tipoCobustivel;
    }

    /**
     * @return string
     */
    public function getTipoCambio(): string
    {
        return $this->tipoCambio;
    }

    /**
     * @return string
     */
    public function getCor(): string
    {
        return $this->cor;
    }

    /**
     * @return float
     */
    public function getPotenciaMotor(): float
    {
        return $this->potenciaMotor;
    }


}