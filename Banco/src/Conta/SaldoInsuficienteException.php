<?php

namespace Banco\Conta;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSacar, float $saldoAtual)
    {
        $mensagem = "Você tentou sacar $valorSacar, mas tem apenas $saldoAtual em conta.";
        parent::__construct($mensagem);
    }
}