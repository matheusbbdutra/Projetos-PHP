<?php

namespace Banco\Conta;

class ContaPoupanca extends Conta
{
    public function depositar($valorDeposito)
    {
        if($valorDeposito < 0)
        {
            throw new ValorNegativoException($valorDeposito);
        }
        $this->saldo += $valorDeposito;
    }

    public function sacar($valorSacar)
    {
        if($valorSacar > $this->saldo){
            throw new SaldoInsuficienteException($valorSacar, $this->saldo);
        }
        if($valorSacar < 0){
            throw new ValorNegativoException($valorSacar);
        }
        $this->saldo -= $valorSacar;
    }

    public function transferir($tipoTransferencia, $valorTransferir, $contaDestino)
    {
        if($this->saldo < $valorTransferir){
            throw new ValorNegativoException($valorTransferir);
        }
        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }

}