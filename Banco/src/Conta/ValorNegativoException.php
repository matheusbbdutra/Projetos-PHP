<?php

namespace Banco\Conta;

class ValorNegativoException extends \DomainException
{
    public function __construct(float $valor)
    {
        $mensagem = "Você passou um valor $valor negativo.";
        parent::__construct($mensagem);
    }
}