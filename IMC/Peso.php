<?php

namespace Peso;

class Peso
{
    private float $peso;

    public function __construct(float $peso)
    {
        $this->peso = $peso;
    }
    /**
     * @return float
     */
    public function getPeso() : float
    {
        return $this->peso;
    }


}
