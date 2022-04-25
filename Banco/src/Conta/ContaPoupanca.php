<?php

namespace Banco\Conta;

class ContaPoupanca extends Conta
{
    public function depositar($valorDeposito)
    {
        if($valorDeposito < 0)
        {
            echo "Valor de deposito não pode ser negativo.";
            return;
        }
        $this->saldo += $valorDeposito;
    }

    public function sacar($valorSacar)
    {
        if($valorSacar > $this->saldo){
            echo "Valor a sacar não pode ser maior que o saldo." . "\n";
            return;
        }
        if($valorSacar < 0){
            echo "Valor a sacar não pode ser negativo.";
            return;
        }
        $this->saldo -= $valorSacar;
    }

    public function transferir($tipoTransferencia, $valorTransferir, $contaDestino)
    {
        if($this->saldo < $valorTransferir){
            echo "Valor de transferencia não pode ser maior que o saldo";
            return;
        }
        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }

}