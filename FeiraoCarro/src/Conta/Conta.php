<?php

namespace Feirao\Conta;


class Conta
{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function __construct(string $agencia,string $conta)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = 0;
    }



    public function  depositar($valorDeposito)
    {
        if($valorDeposito < 0.0)
        {
            throw new \InvalidArgumentException("Você tentou depositar $valorDeposito, mas o valor de deposito não pode ser negativo.");
        }
        $this->saldo += $valorDeposito;
    }

    public function sacar(float $valorSacar)
    {

        if($valorSacar > $this->saldo){
            echo "Valor a sacar não pode ser maior que o saldo";
            return;
        }
        if($valorSacar < 0){
            echo "Valor a sacar não pode ser negativo.";
            return;
        }

        $this->saldo -= $valorSacar;
    }

    public function transferir(float $valorTransferir,$contaDestino)
    {
        if($this->saldo < $valorTransferir){
            throw new \InvalidArgumentException("Você tentou depositar $valorTransferir, mas você possui apenas $this->saldo de saldo.");
        }

        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }
}