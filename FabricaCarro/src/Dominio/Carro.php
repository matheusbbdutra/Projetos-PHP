<?php

namespace Fabrica\Carros;

abstract class Carro
{
    protected string $modelo;
    protected string $tipoCombustivel;
    protected string $tipoCambio;
    protected string $cor;
    protected string $motor;
    protected float $valor;

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }
    /**
     * @return string
     */
    public function getModelo(): string
    {
        return $this->modelo;
    }

    /**
     * @param string $modelo
     * @return Carro
     */
    public function setModelo(string $modelo): Carro
    {
        $this->modelo = $modelo;
        return $this;
    }

    /**
     * @return string
     */
    public function getTipoCombustivel(): string
    {
        return $this->tipoCombustivel;
    }

    /**
     * @param string $tipoCombustivel
     * @return Carro
     */
    public function setTipoCombustivel(string $tipoCombustivel): Carro
    {
        $this->tipoCombustivel = $tipoCombustivel;
        return $this;
    }

    /**
     * @return string
     */
    public function getTipoCambio(): string
    {
        return $this->tipoCambio;
    }

    /**
     * @param string $tipoCambio
     * @return Carro
     */
    public function setTipoCambio(string $tipoCambio): Carro
    {
        $this->tipoCambio = $tipoCambio;
        return $this;
    }

    /**
     * @return string
     */
    public function getCor(): string
    {
        return $this->cor;
    }

    /**
     * @param string $cor
     * @return Carro
     */
    public function setCor(string $cor): Carro
    {
        $this->cor = $cor;
        return $this;
    }

    /**
     * @return string
     */
    public function getMotor(): string
    {
        return $this->motor;
    }

    /**
     * @param string $motor
     * @return Carro
     */
    public function setMotor(string $motor): Carro
    {
        $this->motor = $motor;
        return $this;
    }



}