<?php

namespace Feirao\Service\Conta;

class SistemaDeposito
{
    public function deposito(float $valorADepositar)
    {
        if($valorADepositar < 0.0)
        {
            throw new \InvalidArgumentException("Você tentou depositar $valorADepositar, mas o valor de deposito não pode ser negativo.");
        }

        return $valorADepositar;
    }
}