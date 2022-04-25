<?php

namespace Banco\Conta;

class ContaCorrente extends Conta
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
            echo "Valor a sacar não pode ser maior que o saldo";
            return;
        }
        if($valorSacar < 0){
            echo "Valor a sacar não pode ser negativo.";
            return;
        }

        $this->saldo -= $valorSacar;
    }

    public function transferir($tipoTransferencia, $valorTransferir,$contaDestino)
    {
        if($this->saldo < $valorTransferir){
            echo "Valor de transferencia não pode ser maior que o saldo." .  "\n";
            return;
        }

        if ($tipoTransferencia == 'ted'){
            $this->sacar($valorTransferir + ($valorTransferir * 0.02));
            $contaDestino->depositar($valorTransferir);
            return;
        }

        if($tipoTransferencia == 'doc'){
             $this->sacar($valorTransferir + ($valorTransferir * 0.03));
             $contaDestino->depositar($valorTransferir);
             return;
        }

        $this->sacar($valorTransferir);
        $contaDestino->depositar($valorTransferir);
    }
}