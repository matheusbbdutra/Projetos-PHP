<?php

namespace Feirao\Model\ModeloCarro;

class Fit extends Carro
{
    public function __construct(string $cor)
    {
        $this->modelo = 'Fit';
        $this->tipoCombustivel = 'Flex';
        $this->tipoCambio = 'Automatico';
        $this->cor = $cor;
        $this->motor = '1.0';
        $this->valor = 40000.00;
    }

}