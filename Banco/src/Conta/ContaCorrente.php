<?php

namespace Banco\Conta;

class ContaCorrente extends Conta
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

    public function transferir($tipoTransferencia, $valorTransferir,$contaDestino)
    {
        if($this->saldo < $valorTransferir){
            throw new ValorNegativoException($valorTransferir);
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