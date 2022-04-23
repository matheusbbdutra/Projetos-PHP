<?php

namespace Banco\Conta;

class ContaPoupanca extends Conta
{
    public function depositar($valorDeposito)
    {
        $this->saldo += $valorDeposito;
    }

    public function sacar($valorSacar)
    {
        if($valorSacar > $this->saldo){
            echo "Valor a sacar não pode ser maior que o saldo." . "\n";
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