<?php

namespace Feirao\Service\Conta;

class SistemaTransferencia
{
    public function transferir($valorATransferir, float $saldo)
    {
        if ($saldo < $valorATransferir) {
            throw new \InvalidArgumentException("Você tentou depositar $valorATransferir, mas você possui apenas $this->saldo de saldo.");
        }
        return $valorATransferir;
    }
}