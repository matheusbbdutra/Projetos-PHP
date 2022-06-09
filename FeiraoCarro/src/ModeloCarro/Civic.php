<?php

namespace Feirao\ModeloCarro;

class Civic extends Carro
{
    public function __construct(string $cor)
    {
        $this->modelo = 'Civic';
        $this->tipoCombustivel = 'Flex';
        $this->tipoCambio = 'Automatico';
        $this->cor = $cor;
        $this->motor = '2.0';
        $this->valor = 50000.00;
    }
}