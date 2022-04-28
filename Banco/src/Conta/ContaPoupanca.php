<?php

namespace Banco\Conta;

class ContaPoupanca extends Conta
{
    public function depositar($valorDeposito)
    {
        if($valorDeposito < 0)
        {
            throw new \InvalidArgumentException("Você tentou depositar $valorDeposito, mas o valor de deposito não pode ser negativo.");

        }
        $this->saldo += $valorDeposito;
    }

    public function sacar($valorSacar)
    {
        if($valorSacar > $this->saldo){
            throw new SaldoInsuficienteException($valorSacar, $this->saldo);
        }
        if($valorSacar < 0){
            throw new \InvalidArgumentException("Você tentou depositar $valorSacar, mas o valor de saque não pode ser negativo.");

        }
        $this->saldo -= $valorSacar;
    }

    public function transferir($tipoTransferencia, $valorTransferir, $contaDestino)
    {
        if($this->saldo < $valorTransferir){
            throw new \InvalidArgumentException("Você tentou depositar $valorTransferir, mas você possui apenas $this->saldo de saldo.");

        }
        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }

}