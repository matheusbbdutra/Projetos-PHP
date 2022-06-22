<?php

namespace Feirao\Service\Conta;

use Feirao\Model\Conta\Conta;

class SistemaSaque
{
    public function saque(float $saldo, float $valorSacar)
    {
        if($valorSacar > $saldo){
            throw new \InvalidArgumentException("Valor a sacar não pode ser maior que o saldo");
        }
        if($valorSacar < 0){
            throw new \InvalidArgumentException("Valor a sacar não pode ser negativo.");
        }

        return $valorSacar;
    }
}